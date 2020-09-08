import React from 'react';
import {View} from 'react-native';

import {connect} from '@steroidsjs/core//hoc'
import Button from "@steroidsjs/core/ui/form/Button";
import {showNotification} from "@steroidsjs/core/actions/notifications";
import {Notifications} from "@steroidsjs/core/ui/layout";

@connect()
export default class NotificationScreen extends React.Component<any, any> {
    render() {
        const notificationLevels = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']
        return (
            <View style={{
                height: '100%',
                paddingHorizontal: 10,
                justifyContent: "space-around",
            }}>
                {notificationLevels.map(level => (
                    <Button
                        key={level}
                        size='lg'
                        color={level}
                        label={__(`Notification ${level}`)}
                        onClick={() => this.props.dispatch(showNotification(`${level} notification`, {level}))}
                    />))}
                <Notifications/>
            </View>
        )
    }
}