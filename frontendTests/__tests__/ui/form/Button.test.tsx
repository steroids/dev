import React from 'react';
import Button from '@steroidsjs/core/ui/form/Button';
import {mountInApp} from '../../../setupTests';


// jest.useFakeTimers()

describe('Button test', () => {

    class ViewMock extends React.PureComponent {
        render() {
            return(
                <div>ViewMock</div>
            )
        }
    }

    const onClick = jest.fn(() => new Promise(res => {
        setTimeout(() => res(), 20000)
    }));

    const flushPromises = () => new Promise(setImmediate);

    // const onClick = jest.fn();

    const props = {
        color: 'primary',
        label: 'Test',
        onClick: onClick,
        // view: ViewMock,
    }

    let wrapper;

    beforeEach(() => {
        wrapper = mountInApp(<Button {...props} />)
        // jest.useFakeTimers();
    });

    it('should render something', () => {
        console.debug('html', wrapper.html());
        console.debug('Button props', wrapper.find('Button').props());
        expect(wrapper.html()).not.toBe(null);
    })

    it('should exit props be correct', () => {
        expect(wrapper.find('ButtonView').prop('type')).toBe('button');
    })
    //
    // it('test', async () => {
    //     jest.useFakeTimers();
    //     wrapper.find('button').simulate('click');
    //
    //     expect(onClick).toBeCalled();
    //     expect(onClick).toHaveBeenCalledTimes(1);
    //     expect(wrapper.find('Button').state.isLoading).toBeFalsy();
    //     // expect(wrapper.find('ViewMock').prop('isLoading')).toBeFalsy();
    //
    //     //resolve onClick promise
    //     jest.runAllTimers();
    //     //wait until pending promises are resolved
    //     await flushPromises();
    //     //skip setTimeout after .then
    //     jest.runAllTimers();
    //     expect(wrapper.find('Button').state.isLoading).toBeFalsy();
    //     // wrapper.update();
    //     // expect(wrapper.find('ViewMock').prop('isLoading')).toBeFalsy();
    //
    // })
})