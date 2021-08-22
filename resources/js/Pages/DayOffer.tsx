import React from "react";
import {DayOffer} from "../types";

interface DayOfferProps {
    day_offer: DayOffer;
}

const DayOffer: React.FC<DayOfferProps> = () => {
    return (
        <h1 className="hello-world">Hello world</h1>
    );
};

export default DayOffer;
