import React from "react";
import {ScrollView, Text, View} from 'react-native';
import {bem} from '@steroidsjs/core/hoc';
import styles from './DateTimeFieldScreenStyles';
import {IBemHocOutput} from "@steroidsjs/core/hoc/bem";
import DateTimeField from "@steroidsjs/core/ui/form/DateTimeField";

@bem('DateTimeFieldScreen', styles)
export default class DateTimeFieldScreen extends React.Component<IBemHocOutput> {
    render() {
        const bem = this.props.bem;
        return (
            <View>
                <ScrollView style={bem('screen')}>
                    <Text style={bem('h1')}>DateTimePicker</Text>
                    <View>
                        <Text style={bem('h5')}>Regular</Text>
                        <DateTimeField/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Date & Time formats</Text>
                        <DateTimeField
                            style={{marginBottom: 5}}
                            displayDateFormat={'DD/MM/YYYY'}
                            timeFormat={'HH :: mm'}
                        />
                        <DateTimeField
                            displayDateFormat={'dd MM.YYYY'}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Label</Text>
                        <DateTimeField
                            label={'DateTime field label'}
                            style={{marginBottom: 5}}
                            // TODO layout={{className: 'qwe'}}
                        />
                        <DateTimeField
                            label={'Label of required field'}
                            required={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Disabled</Text>
                        <DateTimeField disabled={true}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Invalid</Text>
                        <DateTimeField errors={['Error #1', 'Error #2']}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Sizing</Text>
                        <DateTimeField
                            size={'sm'}
                            style={{marginBottom: 5}}
                        />
                        <DateTimeField
                            style={{marginBottom: 5}}
                            size={'md'}
                        />
                        <DateTimeField size={'lg'}/>
                    </View>
                </ScrollView>
            </View>
        );
    }
}