import React from "react";
import {ScrollView, Text, View} from 'react-native';
import {bem} from '@steroidsjs/core/hoc';
import styles from './DateFieldScreenStyles';
import {IBemHocOutput} from "@steroidsjs/core/hoc/bem";
import DateField from "@steroidsjs/core/ui/form/DateField";

@bem('DateFieldScreen', styles)
export default class DateFieldScreen extends React.Component<IBemHocOutput> {
    render() {
        const bem = this.props.bem;
        return (
            <View>
                <ScrollView style={bem('screen')}>
                    <Text style={bem('h1')}>DatePicker</Text>
                    <View>
                        <Text style={bem('h5')}>Regular</Text>
                        <DateField/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Date format</Text>
                        <DateField
                            style={{marginBottom: 5}}
                            displayFormat={'DD/MM/YYYY'}
                        />
                        <DateField displayFormat={'dd MM.YYYY'}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Label</Text>
                        <DateField
                            label={'Date field label'}
                            style={{marginBottom: 5}}
                            // TODO layout={{className: 'qwe'}}
                        />
                        <DateField
                            label={'Label of required field'}
                            required={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Disabled</Text>
                        <DateField disabled={true}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Invalid</Text>
                        <DateField errors={['Error #1', 'Error #2']}/>
                    </View>
                    <View>
                        <Text style={bem('h5')}>Sizing</Text>
                        <DateField
                            size={'sm'}
                            style={{marginBottom: 5}}
                        />
                        <DateField
                            style={{marginBottom: 5}}
                            size={'md'}
                        />
                        <DateField size={'lg'}/>
                    </View>
                </ScrollView>
            </View>
        );
    }
}