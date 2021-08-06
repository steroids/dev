import * as React from 'react';

export default function ExampleCardView(props: any) {
    return (
        <div style={{
            border: '1px solid grey',
            margin: '5px',
            width: '300px'
        }}>
            <p>id: {props.item.id}</p>
            <p>title: {props.item.title}</p>
        </div>
    )
}
