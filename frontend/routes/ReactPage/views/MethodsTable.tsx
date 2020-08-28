import * as React from 'react';
import {bem} from '@steroidsjs/core/hoc';

import './MethodsTable.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';
import {IEntityInfoProperty} from '../ReactPage';


interface IMethodsTableProps extends IBemHocOutput {
    methods: IEntityInfoProperty[],
}

interface IMethodsTableState {
    opened: {
        [key: string]: boolean,
    }
}

@bem('MethodsTable')
export default class MethodsTable extends React.PureComponent<IMethodsTableProps, IMethodsTableState> {

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
                    <col width={150}/>
                    <col width={350}/>
                    <col width={150}/>
                    <col width={150}/>
                </colgroup>
                <thead>
                    <tr>
                        <th>Method & Params</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    {this.props.methods.map(method => this.renderMethod(method))}
                </tbody>
            </table>
        );
    }

    renderMethod(method: IEntityInfoProperty) {
        const bem = this.props.bem;
        return [
            <tr
                key={method.name}
                className={bem.element('row')}
            >
                <td className='table-secondary'>
                    {method.name}({method.parameters.map(p => p.name).join(', ')})
                </td>
                <td
                    colSpan={3}
                    className='table-secondary'
                >
                    {method.description}
                </td>
            </tr>
        ].concat(
            method.parameters.map(param => (
                <tr
                    key={method.name + '_' + param.name}
                    className={bem.element('row', 'sub')}
                >
                    <td>
                        <div style={{paddingLeft: 30}}>
                            {param.name}
                        </div>
                    </td>
                    <td>
                        {param.description}
                    </td>
                    <td>
                        {param.type}
                    </td>
                    <td>
                        {param.example}
                    </td>
                </tr>
            ))
        );
    }

}
