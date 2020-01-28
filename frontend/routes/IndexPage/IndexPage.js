import React from 'react';
import {bem} from '@steroidsjs/core/hoc';

import './IndexPage.scss';

@bem('IndexPage')
export default class IndexPage extends React.PureComponent {

    static propTypes = {};

    render() {
        const bem = this.props.bem;
        return (
            <div className={bem.block()}>
                Hello ;)
            </div>
        );
    }

}
