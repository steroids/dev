import React from 'react'
import {View} from 'react-native'
import CheckboxField from "@steroidsjs/core/ui/form/CheckboxField";
import CheckboxListField from "@steroidsjs/core/ui/form/CheckboxListField";
import RadioListField from "@steroidsjs/core/ui/form/RadioListField";

export default class CheckBoxScreen extends React.Component<any, any> {
    render() {
        return (
            <View style={{
                height: '100%',
                width: '100%',
                justifyContent: 'space-around',
                alignItems: 'center',
                backgroundColor: '#242125'
            }}>
                <View>
                    <CheckboxField label='Учитывать параметры моей анкеты'/>
                </View>
                <View>
                    <CheckboxListField
                        items={[
                            {label: 'Америка'},
                            {label: 'Африка'},
                            {label: 'Европа'},
                            {label: 'Австралия'},
                        ]}
                        multiple={true}
                    />
                </View>
                <View>
                    <RadioListField
                        items={[
                                {label: 'Мужской'},
                                {label: 'Женский'},
                                {label: 'Не важно'}
                            ]}
                    />
                </View>
                <View>
                    <RadioListField
                        items={[
                            {label: 'Страна или Город'},
                            {label: 'Круизы'}
                        ]}
                    />
                </View>
            </View>
        )
    }
}