import React from 'react';
import {application} from '@steroidsjs/core/hoc';
import NativeRouter from '@steroidsjs/native/ui/NativeRouter';
import HtmlComponent from '@steroidsjs/native/components/HtmlComponent';
import {getDefaultComponentsStyles} from '@steroidsjs/native/style/index';

import style from './style';

process.env.PLATFORM = 'mobile'

@application({
    components: {
        html: {
            className: HtmlComponent,
            ...style,
        },
    },
    onInit: ({ui, html}) => {
        // Automatically import all views
        ui.addViews({
            'form.InputFieldView': require('@steroidsjs/native/ui/form/InputField').default,
            'form.FieldLayoutView': require('@steroidsjs/native/ui/form/FieldLayout').default,
            'form.ButtonView': require('@steroidsjs/native/ui/form/Button').default,
            'form.DropDownFieldView': require('@steroidsjs/native/ui/form/DropDownField').default,
            'form.DateFieldView': require('@steroidsjs/native/ui/form/DateField').default,
            'form.TimeFieldView': require('@steroidsjs/native/ui/form/TimeField').default,
            'form.DateTimeFieldView': require('@steroidsjs/native/ui/form/DateTimeField').default,
            'form.CheckboxFieldView': require('@steroidsjs/native/ui/form/CheckboxField').default,
            'form.CheckboxListFieldView': require('@steroidsjs/native/ui/form/CheckboxListField').default,
            'form.RadioListFieldView': require('@steroidsjs/native/ui/form/RadioListField').default,
            'layout.NotificationsView': require('@steroidsjs/native/ui/layout/Notifications').default,
            'layout.NotificationsItemView': require('@steroidsjs/native/ui/layout/Notifications/NotificationItemView').default,
            'icon.IconView': require('@steroidsjs/native/ui/icon/IconView').default,
        });

        html.addStyles([
            ...getDefaultComponentsStyles(),
            // applying custom project-level styles
            require('./style/InputFieldViewCustomStyles').default,
        ]);

        ui.addIcons(require('@steroidsjs/native/assets/icons').default);
    },
})
export default class App extends React.PureComponent {
    render() {
        return (
            <NativeRouter auth={null} routes={require('./src/routes').default}/>
        );
    }
}
