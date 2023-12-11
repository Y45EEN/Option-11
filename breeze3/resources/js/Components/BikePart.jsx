import { useForm } from "@inertiajs/react";
import React, { useState } from "react";
import InputError from "@/Components/InputError";

const BikePart = ({ bikePart }) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        bikepartid_hidden: "",
        quantity: "",
    });

    const [selectedBikePartId, setSelectedBikePartId] = useState("");

    const submit = (e) => {
        e.preventDefault();
        post("/addBasketPart", data);
    };

    let rows = [];
    for (let i = 0; i < bikePart.length; i++) {
        let bike = bikePart[i];
        rows.push(
            <tr
                key={bike.bikepartsid}
                onClick={() => {
                    setSelectedBikePartId(bike.bikepartsid);
                    setData("bikepartid_hidden", bike.bikepartsid);
                }}
            >
                <td>{bike.productname}</td>

                <td>{bike.description}</td>

                <td style={{ color: "white" }}>£{bike.price} </td>

                <input
                    id="bikepartid_hidden"
                    min="0"
                    style={{
                        padding: "1px",
                        color: "black",
                    }}
                    type="hidden"
                    value={data.bikepartid_hidden}
                    name="bikepartid_hidden"
                    onChange={(e) => setData("bikepartid_hidden", e.target.value)}
                />

               
                <td>
                    <button type="submit">Add to basket</button>
                </td>
            </tr>
        );
    }
    return (
        <form onSubmit={submit}>
        <table style={{ color: "white" }}>
            <thead>
                <th>Bike Part Name</th>
                <th>Description</th>

                <th>Price</th>

                <th>Action</th>
            </thead>
            <br />
            <tbody>{rows}</tbody>

            <th>Quantity</th>
            <input
                id="quantity"
                min="0"
                style={{
                    padding: "1px",
                    color: "black",
                }}
                type="number"
                value={data.quantity}
                name="quantity"
                onChange={(e) => setData("quantity", e.target.value)}
            />
             <InputError
            message={errors.quantity}
            className="mt-2"
        />
       
        </table>
    </form>
    );
}

export default BikePart;
