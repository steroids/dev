import React from 'react';
import Button from '@steroidsjs/core/ui/form/Button';
import {mountInApp} from '../../../__mocks__/AppMock';

describe('Button tests', () => {
    const onAsyncClick = jest.fn(() => new Promise(res => {
        setTimeout(() => res(), 3000)
    }));

    const flushPromises = () => new Promise(setImmediate);

    const props = {
        color: 'primary',
        label: 'Button',
        onClick: onAsyncClick,
    }

    let wrapper;

    beforeEach(() => {
        wrapper = mountInApp(<Button {...props} />)
    });

    it('should render something', () => {
        expect(wrapper.html()).not.toBe(null);
    })

    it('should exit props be correct', () => {
        expect(wrapper.find('ButtonView').prop('type')).toBe('button');
    })

    it('should isLoading toggling when onClick return Promise', async () => {
        jest.useFakeTimers();

        expect(wrapper.find('Button').state().isLoading).toBeFalsy();
        expect(wrapper.find('ButtonView').props().isLoading).toBeFalsy();

        wrapper.find('button').simulate('click');

        expect(onAsyncClick).toBeCalled();
        expect(onAsyncClick).toHaveBeenCalledTimes(1);
        expect(wrapper.find('Button').state().isLoading).toBeTruthy();
        expect(wrapper.find('ButtonView').props().isLoading).toBeTruthy();

        jest.runAllTimers(); //resolve onClick promise
        await flushPromises(); //wait until pending promises are resolved
        jest.runAllTimers(); //skip setTimeout after .then

        expect(wrapper.find('Button').state().isLoading).toBeFalsy();
        wrapper.update();
        expect(wrapper.find('ButtonView').props().isLoading).toBeFalsy();
    })
})