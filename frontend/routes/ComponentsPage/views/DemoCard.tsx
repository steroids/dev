import * as React from 'react';
import {bem} from '@steroidsjs/core/hoc';

import './DemoCard.scss';
import {IBemHocOutput} from '@steroidsjs/core/hoc/bem';

interface IDemoCardProps extends IBemHocOutput {
    name: string,
    title: string,
    description: string,
    component: React.ComponentType,
    githubUrl: string,
}

interface IDemoCardState {
    renderError: string,
}

@bem('DemoCard')
export default class DemoCard extends React.PureComponent<IDemoCardProps, IDemoCardState> {

    constructor(props) {
        super(props);

        this.state = {
            renderError: null,
        };
    }

    static getDerivedStateFromError(e) {
        return {
            renderError: String(e)
        };
    }

    renderGithubUrl() {
        if (!this.props.githubUrl) {
            return null;
        }
        return (
            <div style={{marginLeft: 'auto'}}>
                <div>
                    <a
                        target={'_blank'}
                        href={this.props.githubUrl}>
                        Github
                    </a>
                </div>
            </div>
        );
    }

    render() {
        const bem = this.props.bem;
        const DemoComponent = this.props.component;
        return (
            <div className={bem.block()}>
                <div className='card mb-4'>
                    <div className={bem('card-body', bem.element('content'))}>
                        <div className='row'>
                            <h6 className='card-title'>
                                {this.props.title}
                            </h6>
                            {this.renderGithubUrl()}
                        </div>
                        {this.props.description && (
                            <p className='card-text'>{this.props.description}</p>
                        )}
                        {this.state.renderError && (
                            <div className={bem.element('error')}>
                                {this.state.renderError}
                            </div>
                        ) ||
                        (
                            <DemoComponent/>
                        )}
                    </div>
                </div>
            </div>
        );
    }

}
