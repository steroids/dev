import * as React from 'react';
import {render} from 'react-dom';

process.env.APP_MULTI_HOC = '1';
process.env.APP_COMPONENTS_GLOBAL = '1';

import Application from './Application';

render(<Application/>, document.getElementById('root'));
