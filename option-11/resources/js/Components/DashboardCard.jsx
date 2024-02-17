import React, { useState } from "react";
const DashboardCard = ({ cardName, children }) => {
    const [selectedBikePartId, setSelectedBikePartId] = useState(false);

    const setOpen = () => {
        if (selectedBikePartId == false) {
            setSelectedBikePartId(true);
        } else {
            setSelectedBikePartId(false);
        }
    };



   

    return (
        <div className="dashboardcard">
            <div
                className={
                    "dashboardContainer " +
                    (selectedBikePartId ? "expand" : "closed")
                }
            >
                <div className="card-title dashboard"  onClick={() => { setOpen();arrow() }}>
                   <p >  {cardName} </p>
                </div>

                <div className="card-open">{children}</div>
            </div>
        </div>
    );
};

export default DashboardCard;
