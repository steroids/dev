import * as React from 'react';
import _set from 'lodash-es/set';
import _get from 'lodash-es/get';
import _upperFirst from 'lodash-es/upperFirst';
import _last from 'lodash-es/last';
import _orderBy from 'lodash-es/orderBy';
import {bem} from '@steroidsjs/core/hoc';

import './ComponentsPage.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import {INavItem} from '@steroidsjs/core/ui/nav/Nav/Nav';
import {ROUTE_COMPONENTS} from '../index';
import Tree from '@steroidsjs/core/ui/nav/Tree';
import DemoCard from './views/DemoCard';
import * as autoDocs from '@steroidsjs/core/docs/autogen-result.json';
import ApiTable from './views/ApiTable';

interface IComponentsPageProps extends IBemHocOutput {
    match: {
        params: {
            category?: 'ui',
            path?: string,
        }
    }
}

interface IComponentsPageState {
    treeItems: INavItem[],
    demos: {
        [key: string]: any[],
    }
}

@bem('ComponentsPage')
export default class ComponentsPage extends React.PureComponent<IComponentsPageProps, IComponentsPageState> {

    static propTypes = {};

    constructor(props) {
        super(props);

        const treeItems = [];

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
                    toRoute: !item.items ? ROUTE_COMPONENTS : null,
                    toRouteParams: !item.items ? {category: 'ui', path} : null,
                };
            });
        };
        treeItems.push({
            id: 'ui',
            label: 'UI Kit',
            items: demosToItems(demosTree),
        });

        this.state = {
            treeItems,
            demos,
        };
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
                    {this.props.match.params.category === 'ui' && this.renderUiCategory()}
                </div>
            </div>
        );
    }

    renderUiCategory() {
        const bem = this.props.bem;
        const demos = this.state.demos[this.props.match.params.path];
        const path = this.props.match.params.path.split('-');
        const name = _last(path);
        const interfaceDocs = _get(autoDocs, ['interfaces', `I${name}Props`]) || {};

        // Get title and description from auto generated docs
        const descriptionTags = {};
        (interfaceDocs.descriptionTags || []).forEach(tag => {
            descriptionTags[tag.tag] = tag.text;
        });
        const descriptionLines = (interfaceDocs.description || '').split('\n');
        const title = descriptionLines.shift() || name;
        const description = descriptionTags['description'] || descriptionLines.join('\n');

        // Order demos by @order tag
        let demosKeys = Object.keys(demos || {});
        demosKeys = _orderBy(demosKeys, name => _get(autoDocs.demos, path.concat([name, 'order'])));

        return (
            <>
                <div className={bem.element('description')}>
                    <h1>{title}</h1>
                    {description && (
                        <p className='w-75'>
                            {description}
                        </p>
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
                        name={`I${name}Props`}
                    />
                </div>
            </>
        );
    }

    renderDemo(name, component) {
        const path = this.props.match.params.path.split('-');
        const docs = _get(autoDocs.demos, path.concat(name)) || {};
        return (
            <div
                key={name}
                className={'col-' + (docs && docs.col || '12')}
            >
                <DemoCard
                    name={name}
                    title={docs && docs.title || _upperFirst(name)}
                    description={docs && docs.description || null}
                    component={component}
                />
            </div>
        );
    }

}
