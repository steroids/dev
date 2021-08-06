import * as React from 'react';
import useFetch from '@steroidsjs/core/hooks/useFetch';
import List from '@steroidsjs/core/ui/list/List';
import ExampleCardView from './views/ExampleCardView';

export const ExamplePageFetchConfig = {
    url: '/api/foo',
}

export const ExamplePageListConfig = {
    listId: 'ExampleList',
    action: '/api/foo'
}

export const ExamplePageListSecondConfig = {
    listId: 'ExampleListSecond',
    items: [{id: 1, title: 'First Card'}, {id: 2, title: 'Second Card'}]
}

export default function ExamplePage() {
    const {data, isLoading} = useFetch(ExamplePageFetchConfig)

    return (
        <div>
            <h1>Example page</h1>
            <p>{isLoading ? 'Загрузка': JSON.stringify(data)}</p>
            <List
                itemView={ExampleCardView}
                {...ExamplePageListConfig}
            />
            <List
                itemView={ExampleCardView}
                {...ExamplePageListSecondConfig}
            />
        </div>
    )
}

