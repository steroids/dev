import * as React from 'react';
import useApplication from '@steroidsjs/core/hooks/useApplication';
import LocaleComponent from '@steroidsjs/core/components/LocaleComponent';
import MetaComponent from '@steroidsjs/core/components/MetaComponent';
import ResourceComponent from '@steroidsjs/core/components/ResourceComponent';
import 'style/index.scss';
import HttpComponent from '@steroidsjs/core/components/HttpComponent';

export const config = {
    reducers: require('@steroidsjs/core/reducers').default,
    routes: () => require('routes').default,
    layoutView: () => require('shared/Layout').default,
    components: {
        http: {
            className: HttpComponent,
        },
        locale: {
            className: LocaleComponent,
        },
        meta: {
            className: MetaComponent,
        },
        resource: {
            className: ResourceComponent,
            googleCaptchaSiteKey: '6Ldz2LIaAAAAAA4mjfUsfExTttu3arVcpsINBiCE'
        }
    },
    onInit: ({ui}) => {
        ui.addViews(require('@steroidsjs/bootstrap').default);
        ui.addFields(require('@steroidsjs/core/ui/form').default);
        //ui.addFormatters(require('@steroidsjs/core/ui/format').default);
        ui.addIcons(require('@steroidsjs/bootstrap/icon/fontawesome').default);
    },
};

export default function Application() {
    const {renderApplication} = useApplication(config);

    return renderApplication();
}
