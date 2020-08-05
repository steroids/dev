import * as React from 'react';
import _get from 'lodash-es/get';
import _isObject from 'lodash-es/isObject';
import _isEmpty from 'lodash-es/isEmpty';
import {bem} from '@steroidsjs/core/hoc';

import './ApiTable.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import Link from '@steroidsjs/core/ui/nav/Link';


interface IInterfacePropertyDoc {
    name: string,
    description: string,
    required: boolean,
    type: string,
    example: string,
}

interface IInterfaceDoc {
    name: string,
    moduleName: string,
    description: string,
    descriptionTags?: {
        tag: string,
        text: string,
    }[],
    extends: string[],
    items: IInterfacePropertyDoc[]
}

interface IApiTableProps extends IBemHocOutput {
    autoDocs: any | {
        interfaces: {
            [key: string]: IInterfaceDoc
        },
        declarations: {
            [key: string]: IInterfacePropertyDoc
        },
        components: any,
    },
    name: string,
}

interface IApiTableState {
    opened: {
        [key: string]: boolean,
    }
}

@bem('ApiTable')
export default class ApiTable extends React.PureComponent<IApiTableProps, IApiTableState> {

    constructor(props) {
        super(props);

        this.state = {
            opened: {},
        };
    }

    render() {
        const bem = this.props.bem;
        return (
            <table className={bem('table table-bordered table-striped', bem.block())}>
                <colgroup>
                    <col width={50}/>
                    <col width={350}/>
                    <col width={250}/>
                    <col width={200}/>
                    <col width={150}/>
                </colgroup>
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Default Value</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    {this.renderRows(this.props.name, this.props.autoDocs.interfaces[this.props.name])}
                </tbody>
            </table>
        );
    }

    renderRows(id: string, interfaceDoc: IInterfaceDoc, level = 0) {
        if (!interfaceDoc) {
            return null;
        }

        const bem = this.props.bem;
        let result = [
            <tr
                key={id}
                className={bem.element('row', {
                    sub: level > 1,
                })}
            >
                <td
                    colSpan={5}
                    className='table-secondary'
                >
                    <div style={{paddingLeft: 30 * level}}>
                        {level > 0 && (
                            <Link
                                label={interfaceDoc.name + ' ' + (this.state.opened[id] ? '-' : '+')}
                                onClick={e => {
                                    e.preventDefault();

                                    this.setState({
                                        opened: {
                                            ...this.state.opened,
                                            [id]: !this.state.opened[id],
                                        }
                                    });
                                }}
                            />
                        ) || (
                            interfaceDoc.name
                        )}
                    </div>
                </td>
            </tr>
        ];
        if (level === 0 || this.state.opened[id]) {
            result = result
                .concat(
                    interfaceDoc.items.map(item => (
                        this.renderRow('interface', interfaceDoc.moduleName, id + '-' + item.name, item, level)
                    )) as Array<any>
                )
                .concat(
                    (interfaceDoc.extends || []).map(extendName => (
                        this.renderRows(id + '-' + extendName, this.props.autoDocs.interfaces[extendName], level)
                    )) as Array<any>
                );
        }
        return result;
    }

    _getInterfaceKeys(interfaceDoc) {
        let keys = [];
        if (interfaceDoc) {
            keys = interfaceDoc.items.map(item => item.name);
            (interfaceDoc.extends || []).forEach(extendName => {
                keys = keys.concat(this._getInterfaceKeys(this.props.autoDocs.interfaces[extendName]));
            });
        }
        return keys;
    }

    renderRow(category, moduleName, id, item, level, parentName = null) {
        const subInterfaces = item.type.split('|')
            .map(type => type.trim())
            .filter(type => !!this.props.autoDocs.interfaces[type]);
        const subDeclarations = item.type.split('|')
            .map(type => type.trim())
            .filter(type => !!this.props.autoDocs.declarations[type]);

        // Get and normalize default value
        const defaultValueKey = [moduleName, 'defaultProps'].concat(parentName).concat(item.name).filter(Boolean);
        let defaultValue = _get(this.props.autoDocs.components, defaultValueKey);
        if (_isObject(defaultValue)) {
            defaultValue = {...defaultValue};
            subInterfaces.forEach(type => {
                this._getInterfaceKeys(this.props.autoDocs.interfaces[type]).forEach(key => {
                    delete defaultValue[key];
                });
            });
            if (_isEmpty(defaultValue)) {
                defaultValue = null;
            }
        }
        if (defaultValue !== null && defaultValue !== undefined) {
            defaultValue = JSON.stringify(defaultValue, null, '  ');
        }

        // if interface has 1 declaration we print his declaration instead interface
        if (subDeclarations.length == 1) {
            const firstSubDeclareType = subDeclarations[0];
            const subType = this.props.autoDocs.declarations[firstSubDeclareType]
            const existNextSubDeclarations = subType.type.split('|')
                .map(type => type.trim())
                .filter(type => !!this.props.autoDocs.declarations[type]);
            if (!_isEmpty(subDeclarations) && _isEmpty(existNextSubDeclarations) && level === 0) {
                let subTypeClone = {
                    type: null,
                };
                //clone object
                Object.assign(subTypeClone, subType);
                subTypeClone.type = `${firstSubDeclareType}(${subType.type})`;
                return this.renderRow(category, moduleName, id + '-' + firstSubDeclareType, subTypeClone, 0);
            }
        }

        const bem = this.props.bem;
        const isSub = (level > 0 && category === 'interface') || level > 1;
        return [
            <tr
                key={id}
                className={bem.element('row', {
                    sub: isSub,
                })}
            >
                <td>
                    {category === 'declaration' && (
                        <code style={{paddingLeft: 30 * level}}>
                            {item.name}
                        </code>
                    ) || (
                        <pre className='m-0 font-weight-bold' style={{paddingLeft: 30 * level}}>
                            {item.name + (item.required ? '*' : '')}
                        </pre>
                    )}
                </td>
                <td>
                    {item.description}
                </td>
                <td>
                    <code>
                        {item.type}
                    </code>
                </td>
                <td>
                    <code>{defaultValue}</code>
                </td>
                <td>
                    {item.example}
                </td>
            </tr>
        ]
            .concat(
                subDeclarations.map(type => (
                    this.renderRow(
                        'declaration',
                        moduleName,
                        id + '-' + type,
                        this.props.autoDocs.declarations[type],
                        level + 1,
                        [parentName, item.name].filter(Boolean)
                    )
                )) as Array<any>
            )
            .concat(
                subInterfaces.map(type => (
                    this.renderRows(id + '-' + type, this.props.autoDocs.interfaces[type], level + 1)
                ))
            );
    }

}
