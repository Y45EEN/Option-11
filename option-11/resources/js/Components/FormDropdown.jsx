import React, { useState } from "react";
const FormDropdown = ({ cardName, children }) => {
    const [dropdownstate, setDropdownopen] = useState(false);

    const setOpen = () => {
        if (dropdownstate == false) {
            setDropdownopen(true);
        } else {
            setDropdownopen(false);
        }
    };



   

    return (
        <div className="dropdown">
            <div
                className={
                    "dropdowncontainer " +
                    (dropdownstate ? "expand" : "closed")
                }
            >
                <div className="card-title dropdown" >
                   <p >  {cardName} :   <button onClick={() => { setOpen() }}>Edit</button> </p>
                </div>

                <div className="card-open dropdown">{children}</div>
            </div>
        </div>
    );
};

export default FormDropdown;
