import React from "react";
import {ScrollView, Text, View} from 'react-native';
import {bem} from '@steroidsjs/core/hoc';
import styles from './TimeFieldScreenStyles';
import {IBemHocOutput} from "@steroidsjs/core/hoc/bem";
import {TimeField} from "@steroidsjs/core/ui/form";

@bem('TimeFieldScreen', styles)
export default class TimeFieldScreen extends React.Component<IBemHocOutput> {
    render() {
        const bem = this.props.bem;
        return (
            <View>
                <ScrollView style={bem('screen')}>
                    <Text style={bem('h1')}>TimePicker</Text>
                    <View>
                        <Text style={bem('h5')}>Regular</Text>
                        <TimeField/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Label</Text>
                        <TimeField
                            label={'Time field label'}
                            style={{marginBottom: 5}}
                            // TODO layout={{className: 'qwe'}}
                        />
                        <TimeField
                            label={'Label of required field'}
                            required={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Disabled</Text>
                        <TimeField disabled={true}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Invalid</Text>
                        <TimeField errors={['Error #1', 'Error #2']}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Sizing</Text>
                        <TimeField
                            size={'sm'}
                            style={{marginBottom: 5}}
                        />
                        <TimeField
                            style={{marginBottom: 5}}
                            size={'md'}
                        />
                        <TimeField size={'lg'}/>
                    </View>
                </ScrollView>
            </View>
        );
    }
}