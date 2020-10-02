import React from 'react';
import InputField from '@steroidsjs/core/ui/form/InputField';
import {mountInApp} from '../../../__mocks__/AppMock';

describe('InputField tests', () => {
    it('should render something without props', () => {
        const wrapper = mountInApp(<InputField />);
        expect(wrapper).not.toBeEmptyRender();
    });

    describe('Static props', () => {
        const props = {
            type: 'password',
            disabled: true,
            required: true,
            className: 'test',
            placeholder: 'test',
            // isInvalid: true,
            style: {width: '120px'},
        };

        const wrapper = mountInApp(<InputField {...props}/>);

        it('should static props transmitted unchanged', () => {
            expect(wrapper.find('InputFieldView')).toHaveProp(props);
        });
        it('should have right type', () => {
            expect(wrapper.find('input')).toHaveProp('type', props.type);
        });
        it('should have right placeholder', () => {
            expect(wrapper.find('input')).toHaveProp('placeholder', props.placeholder);
        });
        it('should have right external style', () => {
            expect(wrapper.find('input')).toHaveProp('style', props.style);
        });
        it('should have right external className', () => {
            expect(wrapper.find('InputFieldView')).toHaveClassName(props.className);
        });
        //TODO
        // it('should have right is-invalid modifier', () => {
        //     expect(wrapper.find('input')).toHaveClassName('is-invalid');
        // });
        it('should be disabled ', () => {
            expect(wrapper.find('input')).toBeDisabled();
        });
    });

    describe('Conditional props', () => {
        it('should render empty with type "hidden"', () => {
            const wrapper = mountInApp(<InputField type='hidden'/>);
            expect(wrapper).toBeEmptyRender();
        });
    });

    describe('Actions', () => {
        it('should value change', () => {
            const wrapper = mountInApp(<InputField/>);
            wrapper.find('input').simulate('change', { target: { value: 'test' } });
            expect(wrapper.find('InputFieldView').prop('input').value).toEqual('test');
            expect(wrapper.find('input')).toHaveProp('value', 'test');
        });
    })


});
