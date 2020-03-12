import React from "react";
import {ScrollView, Text, TouchableOpacity, View} from 'react-native';
import {bem} from '@steroidsjs/core/hoc';
import {DropDownField} from "@steroidsjs/core/ui/form";


interface IState {
    visible: Boolean,
    picked: Boolean
}

@bem('DropDownScreen')
export default class HelloScreen extends React.Component<any, IState> {
    constructor (props, ctx) {
        super(props, ctx);

        this.state = {
            visible: false,
            picked: null,
        };
    }

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
        const { visible, picked } = this.state;

        const options = [
            {
                key: 'kenya',
                label: 'Kenya',
            },
            {
                key: 'uganda',
                label: 'Uganda',
            },
            {
                key: 'libya',
                label: 'Libya',
            },
            {
                key: 'morocco',
                label: 'Morocco',
            },
            {
                key: 'estonia',
                label: 'Estonia',
            },
        ];

        const bem = this.props.bem;
        return (
            <View>
                <ScrollView style={bem('screen')}>
                    <Text style={bem('h1')}>DropDown</Text>
                    <View>
                        <Text style={bem('h5')}>Regular</Text>
                        <DropDownField
                            items={this.items}
                            selectedItems={[]}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Multiple</Text>
                        <DropDownField
                            items={this.items}
                            selectedItems={[]}
                            multiple={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Invalid</Text>
                        <DropDownField
                            items={this.items}
                            selectedItems={[]}
                            errors={[
                                'error #1',
                                'error #2',
                            ]}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Required</Text>
                        <DropDownField
                            items={this.items}
                            selectedItems={[]}
                            label={'Required to fill'}
                            required={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>With reset</Text>
                        <DropDownField
                            items={this.items}
                            selectedItems={[this.items[0]]}
                            multiple={true}
                            showReset={true}
                        />
                    </View>
                    <View>
                        <Text style={bem('h5')}>Disabled</Text>
                        <DropDownField
                            items={this.items}
                            selectedItems={[]}
                            disabled={true}
                        />
                    </View>
                </ScrollView>
            </View>
        );
    }
}