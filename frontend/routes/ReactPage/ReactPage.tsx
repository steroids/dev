import * as React from 'react';
import {findDOMNode} from 'react-dom';
import marked from 'marked';
import hljs from 'highlight.js';
import _set from 'lodash-es/set';
import _get from 'lodash-es/get';
import _lowerFirst from 'lodash-es/lowerFirst';
import _upperFirst from 'lodash-es/upperFirst';
import _last from 'lodash-es/last';
import _orderBy from 'lodash-es/orderBy';
import {bem, connect} from '@steroidsjs/core/hoc';

import './ReactPage.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import {INavItem} from '@steroidsjs/core/ui/nav/Nav/Nav';
import {ROUTE_REACT} from '../index';
import Tree from '@steroidsjs/core/ui/nav/Tree';
import DemoCard from './views/DemoCard';
import * as autoDocs from '@steroidsjs/core/build/docs-autogen-result.json';
import ApiTable from './views/ApiTable';
import {goToRoute} from '@steroidsjs/core/actions/router';
import {IConnectHocOutput} from '@steroidsjs/core/hoc/connect';
import MethodsTable from './views/MethodsTable';

export interface IEntityInfoProperty {
    name: string,
    description: string,
    required: boolean,
    type: string,
    example: string,
    parameters?: IEntityInfoProperty[],
}

export interface IEntityInfo {
    name: string,
    moduleName: string,
    title: string,
    description: string,
    tags: { [key: string]: string },
    defaultProps?: object,
    extends?: string[],
    properties?: IEntityInfoProperty[],
    methods?: IEntityInfoProperty[],
}


interface IReactPageProps extends IBemHocOutput, IConnectHocOutput {
    match: {
        params: {
            category?: 'docs' | 'component' | 'hoc' | 'ui',
            path?: string,
        }
    }
}

interface IReactPageState {
    treeItems: INavItem[],
    demos: {
        [key: string]: any[],
    }
}

const CATEGORY_DOCS = 'docs';
const CATEGORY_COMPONENT = 'component';
const CATEGORY_HOC = 'hoc';
const CATEGORY_UI = 'ui';

const getGithubUrl = (componentPath: string, exampleName: string) => {
    return `https://github.com/steroids/react/blob/master/ui/${componentPath}/demo/${exampleName}.tsx`;
};

@bem('ReactPage')
@connect()
export default class ReactPage extends React.PureComponent<IReactPageProps, IReactPageState> {

    static propTypes = {};

    constructor(props) {
        super(props);

        this._onMarkdownLinkClick = this._onMarkdownLinkClick.bind(this);

        const treeItems = [];

        // Get react docs
        treeItems.push({
            id: CATEGORY_DOCS,
            label: 'Документация',
            items: Object.entries(require('@steroidsjs/core/docs/index.json')).map(([id, label]) => ({
                id,
                label,
                toRoute: ROUTE_REACT,
                toRouteParams: {
                    category: CATEGORY_DOCS,
                    path: id,
                },
            })),
        });

        // Get application components
        treeItems.push({
            id: CATEGORY_COMPONENT,
            label: 'Компоненты приложения',
            items: Object.entries(autoDocs.components || {})
                .map(([name, info]) => {
                    const match = name.match(/^components\/(.*)Component$/);
                    if (!match) {
                        return;
                    }

                    const id = _lowerFirst(match[1]);
                    return {
                        id,
                        label: match[1],
                        toRoute: ROUTE_REACT,
                        toRouteParams: {
                            category: CATEGORY_COMPONENT,
                            path: id,
                        },
                    };
                })
                .filter(Boolean)
        });

        // Get HOC
        const hocNames = [];
        treeItems.push({
            id: CATEGORY_HOC,
            label: 'High Order Component',
            items: Object.entries(autoDocs.interfaces || {})
                .map(([name, info]) => {
                    const match = name.match(/^I(.*)Hoc(Output|Input)$/);
                    if (!match) {
                        return;
                    }

                    const id = _lowerFirst(match[1]);
                    if (hocNames.includes(id)) {
                        return;
                    }
                    hocNames.push(id);

                    return {
                        id,
                        label: match[1],
                        toRoute: ROUTE_REACT,
                        toRouteParams: {
                            category: CATEGORY_HOC,
                            path: id,
                        },
                    };
                })
                .filter(Boolean)
        });


        // Get demos tree
        const demosContext = require.context('@steroidsjs/core/ui', true, /demo\/([^\/]+\.tsx?)$/);
        const demosTree = {};
        demosContext.keys()
            .map(fileName => {
                const matches = fileName.match(/^\.\/(.*)\/demo\/([^^\/]+)\.(js|ts)x?$/);
                if (matches) {
                    const path = matches[1].split(/\//g);
                    const demoName = matches[2];
                    const key = path.join('.items.');
                    const id = path[path.length - 1];

                    if (!_get(demosTree, key)) {
                        _set(demosTree, key, {id, path});
                    }
                    _set(demosTree, key.split('.').concat(['demos', demoName]), demosContext(fileName).default);
                }
            })
            .filter(Boolean);

        // Convert tree to items tree
        const demos = {};
        const demosToItems = obj => {
            return Object.keys(obj || {}).map(id => {
                const item = obj[id];
                const path = item.path ? item.path.join('-') : null;
                if (path) {
                    demos[path] = item.demos;
                }
                return {
                    id,
                    label: _upperFirst(id),
                    items: demosToItems(item.items),
                    toRoute: !item.items ? ROUTE_REACT : null,
                    toRouteParams: !item.items ? {category: CATEGORY_UI, path} : null,
                };
            });
        };
        treeItems.push({
            id: CATEGORY_UI,
            label: 'UI компоненты',
            items: demosToItems(demosTree),
        });

        this.state = {
            treeItems,
            demos,
        };

        console.time('ReactPage');
    }

    componentDidMount() {
        this._checkLinks();

        if (!this.props.match.params.category) {
            this.props.dispatch(goToRoute(ROUTE_REACT, {
                category: CATEGORY_DOCS,
                path: 'index',
            }))
        }

        setTimeout(() => console.timeEnd('ReactPage'));
    }

    componentDidUpdate() {
        this._checkLinks();
    }

    render() {
        const bem = this.props.bem;
        return (
            <div className={bem.block()}>
                <div className={bem.element('tree')}>
                    <Tree
                        autoOpenLevels={5}
                        items={this.state.treeItems}
                    />
                </div>
                <div className={bem.element('content')}>
                    {this.props.match.params.category === CATEGORY_DOCS && this.renderDocsCategory()}
                    {this.props.match.params.category === CATEGORY_COMPONENT && this.renderComponentCategory()}
                    {this.props.match.params.category === CATEGORY_HOC && this.renderHocCategory()}
                    {this.props.match.params.category === CATEGORY_UI && this.renderUiCategory()}
                </div>
            </div>
        );
    }

    _checkLinks() {
        findDOMNode(this).querySelectorAll('.markdown-body a[href]').forEach(element => {
            let href = element.getAttribute('href');
            if (href.match(/\.md$/)) {
                href = href.replace(/\.md$/, '');
                element.setAttribute('href', href);

                element.removeEventListener('click', this._onMarkdownLinkClick);
                element.addEventListener('click', this._onMarkdownLinkClick);
            } else {
                element.setAttribute('target', '_blank');
            }
        });
    }

    _onMarkdownLinkClick(e) {
        e.preventDefault();

        window.scrollTo(0, 0);
        this.props.dispatch(goToRoute(ROUTE_REACT, {
            category: CATEGORY_DOCS,
            path: e.target.getAttribute('href'),
        }));
    }

    renderDocsCategory() {
        const bem = this.props.bem;
        const docsContext = require.context('raw-loader!@steroidsjs/core/docs', true, /\.md$/);
        const docsKey = `./${this.props.match.params.path}.md`;
        let content = docsContext.keys().includes(docsKey) ? docsContext(docsKey).default : null;

        return (
            <div className={bem(bem.element('markdown'), 'markdown-body')}>
                {this._renderMarkdown(content)}
            </div>
        );
    }

    renderComponentCategory() {
        const bem = this.props.bem;
        const name = _upperFirst(this.props.match.params.path);
        const classDocs: IEntityInfo = _get(autoDocs, ['components', `components/${name}Component`]);
        if (!classDocs) {
            return null;
        }

        return (
            <>
                <div className={bem.element('description')}>
                    <h1>{classDocs.title || classDocs.name}</h1>
                    {classDocs.description && (
                        <div className='w-75'>
                            {this._renderMarkdown(classDocs.description)}
                        </div>
                    )}
                </div>
                <div className={bem.element('api')}>
                    <h2>Configuration</h2>
                    <ApiTable
                        autoDocs={autoDocs}
                        entityInfo={classDocs}
                    />
                    <h2>Methods</h2>
                    <MethodsTable
                        methods={classDocs.methods}
                    />
                </div>
            </>
        );
    }

    renderHocCategory() {
        const bem = this.props.bem;
        const name = _upperFirst(this.props.match.params.path);
        const inputName = `I${name}HocInput`;
        const outputName = `I${name}HocOutput`;

        const inputDoc: IEntityInfo = _get(autoDocs, ['interfaces', inputName]);
        const outputDoc: IEntityInfo = _get(autoDocs, ['interfaces', outputName]);
        const title = inputDoc.title || outputDoc.title;
        const description = inputDoc.description || outputDoc.description;

        return (
            <>
                <div className={bem.element('description')}>
                    <h1>{title}</h1>
                    {description && (
                        <div className='w-75'>
                            {this._renderMarkdown(description)}
                        </div>
                    )}
                </div>
                <div className={bem.element('api')}>
                    <h2>Input</h2>
                    <ApiTable
                        autoDocs={autoDocs}
                        entityInfo={inputDoc}
                    />
                    <h2>Output</h2>
                    <ApiTable
                        autoDocs={autoDocs}
                        entityInfo={outputDoc}
                    />
                </div>
            </>
        );
    }

    renderUiCategory() {
        const bem = this.props.bem;
        const demos = this.state.demos[this.props.match.params.path];
        const path = this.props.match.params.path.split('-');
        const name = _last(path);

        // Get title and description from auto generated docs
        const info = _get(autoDocs, ['interfaces', `I${name}Props`]);

        // Order demos by @order tag
        let demosKeys = Object.keys(demos || {});
        demosKeys = _orderBy(demosKeys, name => _get(autoDocs.demos, path.concat([name, 'order'])));

        return (
            <>
                <div className={bem.element('description')}>
                    <h1>{info.title}</h1>
                    {info.description && (
                        <div className='w-75'>
                            {this._renderMarkdown(info.description)}
                        </div>
                    )}
                </div>
                <div className={bem.element('demos')}>
                    <h2>Examples</h2>
                    <div className='row'>
                        {demosKeys.map(name => this.renderDemo(name, demos[name]))}
                    </div>
                </div>
                <div className={bem.element('api')}>
                    <h2>Api</h2>
                    <ApiTable
                        autoDocs={autoDocs}
                        entityInfo={autoDocs.interfaces[`I${name}Props`]}
                    />
                </div>
            </>
        );
    }

    renderDemo(name, component) {
        const path = this.props.match.params.path.split('-');
        const docs = _get(autoDocs.demos, path.concat(name)) || {};

        const componentPath = this.props.match.params.path;
        const githubUrl = getGithubUrl(componentPath.replace('-', '/'), name)

        return (
            <div
                key={name}
                className={'col-' + (docs && docs.col || '12')}
            >
                <DemoCard
                    name={name}
                    githubUrl={githubUrl}
                    title={docs && docs.title || _upperFirst(name)}
                    description={docs && docs.description || null}
                    component={component}
                />
            </div>
        );
    }

    _renderMarkdown(content) {
        return (
            <div dangerouslySetInnerHTML={{
                    __html: marked(content, {
                        highlight: function (code, language) {
                            if (!hljs.getLanguage(language)) {
                                language = 'plaintext';
                            }
                            return hljs.highlight(language, code).value;
                        },
                        /*pedantic: false,
                        gfm: true,
                        breaks: false,
                        sanitize: false,
                        smartLists: true,
                        smartypants: false,
                        xhtml: false*/
                    }),
                }}
            />
        )
    }

}
