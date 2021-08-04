import * as React from 'react';
import useFetch from '@steroidsjs/core/hooks/useFetch';

export const ExamplePageFetchConfig = {
    url: '/api/foo',
}

export default function ExamplePage() {
    const {data, isLoading} = useFetch(ExamplePageFetchConfig)

    return (
        <div>
            <h1>Example page</h1>
            <p>{isLoading ? 'Загрузка': JSON.stringify(data)}</p>
        </div>
    )
}

