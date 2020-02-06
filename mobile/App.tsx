import React from 'react';
import {StyleSheet, Text, View} from 'react-native';
import Router from "./src/router";
import {application} from '@steroidsjs/core/hoc';

@application({
    onInit: ({ui}) => {
        // Automatically import all views
        ui.addViews({
            'form.InputFieldView': require('./src/ui/form/InputField/InputFieldView'),
        });
        /*ui.addViews(require.context('@steroidsjs/bootstrap', true, /View.js$/));
        ui.addFields(require.context('@steroidsjs/bootstrap', true, /Field.js$/));
        ui.addFormatters(require.context('@steroidsjs/bootstrap', true, /Formatter.js$/));

        // Automatically import all fields and formatters from steroids
        ui.addFields(require.context('@steroidsjs/core/ui', true, /Field.js$/));
        ui.addFormatters(require.context('@steroidsjs/core/ui', true, /Formatter.js$/));*/
    },
})
export default class App extends React.PureComponent {
    render() {
        return <Router/>;
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
        alignItems: 'center',
        justifyContent: 'center',
    },
});
