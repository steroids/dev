import * as React from 'react';
import {hydrate} from 'react-dom';

import Application from './Application';

hydrate(<Application/>, document.getElementById('root'));
