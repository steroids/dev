import React from "react";
import {ScrollView, Text, View} from 'react-native';
import {bem} from '@steroidsjs/core/hoc';
import DropDownField from "@steroidsjs/core/ui/form/DropDownField";
import styles from './DropDownScreenStyles';
import {IBemHocOutput} from "@steroidsjs/core/hoc/bem";

@bem('DropDownScreen', styles)
export default class DropDownScreen extends React.Component<IBemHocOutput> {
    items = [
        {id: 1, label: 'First'},
        {id: 2, label: 'Second'},
        {id: 3, label: 'Third'},
        {id: 4, label: 'Fourth'},
        {id: 5, label: 'Fifth'},
        {id: 6, label: 'Sixth'},
        {id: 7, label: 'Seventh'},
        {id: 8, label: 'Eighth'},
        {id: 9, label: 'Ninth'},
        {id: 10, label: 'Tenth'},
        {id: 11, label: 'Eleventh'},
    ];

    render() {
        const bem = this.props.bem;
        return (
            <View>
                <ScrollView style={bem('screen')}>
                    <Text style={bem('h1')}>DropDown</Text>
                    <View>
                        <Text style={bem('h5')}>Regular</Text>
                        <DropDownField
                            items={this.items}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Multiple</Text>
                        <DropDownField
                            items={this.items}
                            multiple={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Invalid</Text>
                        <DropDownField
                            items={this.items}
                            errors={[
                                'error #1',
                                'error #2',
                            ]}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Label</Text>
                        <DropDownField
                            items={this.items}
                            label={'A regular label'}
                            style={{marginBottom: 10}}
                        />
                        <DropDownField
                            items={this.items}
                            label={'Required to fill'}
                            required={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Sizing</Text>
                        <DropDownField
                            style={{marginBottom: 10}}
                            items={this.items}
                            size={'sm'}
                        />
                        <DropDownField
                            style={{marginBottom: 10}}
                            items={this.items}
                            size={'md'}
                        />
                        <DropDownField
                            items={this.items}
                            size={'lg'}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>With reset</Text>
                        <DropDownField
                            items={this.items}
                            selectedItems={[this.items[0]]}
                            showReset={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Disabled</Text>
                        <DropDownField
                            items={this.items}
                            disabled={true}
                        />
                    </View>
                </ScrollView>
            </View>
        );
    }
}