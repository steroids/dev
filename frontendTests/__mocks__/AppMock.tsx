import {application} from "@steroidsjs/core/hoc";
import {mount} from 'enzyme';
import views from "@steroidsjs/bootstrap";
import fields from "@steroidsjs/core/ui/form";
import formatters from "@steroidsjs/core/ui/format";
import icons from "@steroidsjs/bootstrap/icon/fontawesome";
import React from "react";

@application({
    onInit: ({ui}) => {
        ui.addViews(views);
        ui.addFields(fields);
        ui.addFormatters(formatters);
        ui.addIcons(icons);
    },
})
export default class AppMock extends React.PureComponent {
    render() {
        return(this.props.children);
    }
}

export const mountInApp = (Component) => mount(
    <AppMock>
        {Component}
    </AppMock>
)