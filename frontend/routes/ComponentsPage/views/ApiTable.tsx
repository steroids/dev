import * as React from 'react';
import {bem} from '@steroidsjs/core/hoc';

import './ApiTable.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';

interface IInterfaceDoc {
    name: string,
    description: string,
    descriptionTags?: {
        tag: string,
        text: string,
    }[],
    extends: string[],
    items: {
        name: string,
        description: string,
        required: boolean,
        type: string,
        example: string,
    }[]
}

interface IApiTableProps extends IBemHocOutput {
    autoDocs: {
        interfaces: {
            [key: string]: IInterfaceDoc
        }
    },
    name: string,
}

const declaredTypes = {
    ColorName: '"primary" | "secondary" | "success" | "info" | "warning" | "danger" | "light" | "dark" | string',
    Sizes: '"sm" | "md" | "lg" | string',
    FormLayout: '"default" | "horizontal" | "inline" | string',
};

@bem('ApiTable')
export default class ApiTable extends React.PureComponent<IApiTableProps> {

    render() {
        const bem = this.props.bem;
        return (
            <table className={bem('table table-bordered table-striped', bem.block())}>
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    {this.renderRows(this.props.autoDocs.interfaces[this.props.name])}
                </tbody>
            </table>
        );
    }

    renderRows(interfaceDoc: IInterfaceDoc) {
        if (!interfaceDoc) {
            return null;
        }
        console.log(345, interfaceDoc);

        return (
            <>
                <tr>
                    <td
                        className='table-secondary'
                        colSpan={4}
                    >
                        {interfaceDoc.name}
                    </td>
                </tr>
                {interfaceDoc.items.map((item, index) => (
                    <tr key={index}>
                        <th>
                            <pre className='m-0'>{item.name}{item.required ? '*' : ''}</pre>
                        </th>
                        <td>
                            {item.description}
                        </td>
                        <td>
                            <code>{declaredTypes[item.type] || item.type}</code>
                        </td>
                        <td>
                            {item.example}
                        </td>
                    </tr>
                ))}
                {(interfaceDoc.extends || []).map(extendName => (
                    this.renderRows(this.props.autoDocs.interfaces[extendName])
                ))}
            </>
        );
    }

}
