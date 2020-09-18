import * as React from 'react';
import {bem} from '@steroidsjs/core/hoc';

import './Yii2Page.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';

@bem('Yii2Page')
export default class Yii2Page extends React.PureComponent<IBemHocOutput> {

    static propTypes = {};

    render() {
        const bem = this.props.bem;
        return (
            <div className={bem.block()}>

            </div>
        );
    }

}
