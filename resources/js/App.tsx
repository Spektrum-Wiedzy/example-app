import { InertiaApp } from "@inertiajs/inertia-react";
import React from "react";
import { render } from "react-dom";

const el = document.getElementById("app") as HTMLDivElement & {
    dataset: {
        page: string;
    };
};

render(
    <InertiaApp
        initialPage={JSON.parse(el.dataset.page)}
        resolveComponent={name => require(`./Pages/${name}`).default}
    />,
    el
);
