import {combineReducers} from 'redux';
import {reducer as form} from 'redux-form';
import auth from '@steroidsjs/core/reducers/auth';
import fields from '@steroidsjs/core/reducers/fields';
import list from '@steroidsjs/core/reducers/list';
import notifications from '@steroidsjs/core/reducers/notifications';
import modal from '@steroidsjs/core/reducers/modal';

export {form, auth, fields, list, notifications, modal};
export default asyncReducers =>
    combineReducers({
        form,
        auth,
        fields,
        list,
        notifications,
        modal,
        ...asyncReducers
    });
