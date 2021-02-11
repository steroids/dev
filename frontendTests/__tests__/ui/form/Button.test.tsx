import React from 'react';
import Button from '@steroidsjs/core/ui/form/Button';
import {mountInApp} from '../../../__mocks__/AppMock';

describe('Button tests', () => {
    it('should render something without props', () => {
        const wrapper = mountInApp(<Button />);
        expect(wrapper).not.toBeEmptyRender();
    });

    describe('Static props', () => {
        const props = {
            label: 'Button',
            // icon: 'foo', TODO: add test 'should render icon'
            type: 'submit',
            color: 'warning',
            outline: true,
            style: {width: '120px'},
            className: 'test',
            disabled: true,
        } as const;

        const wrapper = mountInApp(<Button {...props} />);

        it('should static props transmitted unchanged', () => {
            expect(wrapper.find('ButtonView')).toHaveProp(props);
        });
        it('should render label', () => {
            expect(wrapper.find('.ButtonView__label')).toHaveText(props.label);
        });

        it('should have right type', () => {
            expect(wrapper.find('button')).toHaveProp('type', props.type);
        });
        it('should have right color modifier', () => {
            expect(wrapper.find('button')).toHaveClassName(`ButtonView_color_${props.color}`);
        });
        it('should have right outline modifier', () => {
            expect(wrapper.find('button')).toHaveClassName('ButtonView_outline');
        });
        it('should have right external className', () => {
            expect(wrapper.find('button')).toHaveClassName(props.className);
        });
        it('should have right external style', () => {
            expect(wrapper.find('button')).toHaveProp('style', props.style);
        });
        it('should be disabled ', () => {
            expect(wrapper.find('button')).toBeDisabled();
        });
    });

    describe('Conditional props', () => {
        it('should render "a" tag with props tag', () => {
            const wrapper = mountInApp(<Button tag='a' />);
            expect(wrapper.find('a')).toExist();
        });

        it('should render "a" tag with props url', () => {
            const wrapper = mountInApp(<Button url='https://ya.ru' />);
            expect(wrapper.find('a')).toExist();
        });

        it('should render "a" tag with props link', () => {
            const wrapper = mountInApp(<Button link />);
            expect(wrapper.find('a')).toExist();
        });
    });

    describe('Actions', () => {
        const asyncClick = jest.fn(() => new Promise<void>(res => {
            setTimeout(() => res(), 3000);
        }));

        const flushPromises = () => new Promise(setImmediate);

        it('should isLoading toggling when onClick return Promise', async () => {
            const wrapper = mountInApp(<Button onClick={asyncClick} />);
            jest.useFakeTimers();

            expect(wrapper.find('ButtonView').props().isLoading).toBeFalsy();

            wrapper.find('button').simulate('click');

            expect(asyncClick).toBeCalled();
            expect(asyncClick).toHaveBeenCalledTimes(1);
            expect(wrapper.find('ButtonView').props().isLoading).toBeTruthy();

            jest.runAllTimers(); //resolve onClick promise
            await flushPromises(); //wait until pending promises are resolved
            jest.runAllTimers(); //skip setTimeout after .then
            wrapper.update();

            expect(wrapper.find('ButtonView').props().isLoading).toBeFalsy();
        });
    });
});
