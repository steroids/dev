import * as React from 'react';
import {bem} from '@steroidsjs/core/hoc';

import './IndexPage.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';

import appIllustrationImg from '../../resource/index-app-illustration.png';

@bem('IndexPage')
export default class IndexPage extends React.PureComponent<IBemHocOutput> {

    static propTypes = {};

    render() {
        const bem = this.props.bem;
        return (
            <div className={bem.block()}>
                <div className={bem.element('centered')}>
                    <div className={bem.element('title')}>
                        {__(   'Steroids — фреймворк для создания сложных и расширяемых веб-приложений')}
                    </div>
                    <div className={bem.element('image')}>
                        <img
                            src={appIllustrationImg}
                            alt={__(   'Steroids — фреймворк для создания сложных и расширяемых веб-приложений')}
                        />
                    </div>
                </div>
            </div>
        );
    }

}
