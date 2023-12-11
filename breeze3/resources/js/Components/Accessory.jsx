import { useForm } from "@inertiajs/react";
import React, { useState } from "react";
import InputError from "@/Components/InputError";

const Accessory = ({accessories}) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        accessoryid_hidden: "",
        quantity: "",
    });

    const [selectedAccessory, setSelectedAccessory] = useState("");

    const submit = (e) => {
        e.preventDefault();
        post("/addBasketAccessory", data);
    };

    let rows = [];
    for (let i = 0; i < accessories.length; i++) {
        let bike = accessories[i];
        rows.push(
            <tr
                key={bike.bikeid}
                onClick={() => {
                    setSelectedAccessory(bike.accessoryid);
                    setData("accessoryid_hidden", bike.accessoryid);
                }}
            >
                <td>{bike.productname}</td>

                <td>{bike.description}</td>

                <td style={{ color: "white" }}>£{bike.price} </td>

                <input
                    id="accessoryid_hidden"
                    min="0"
                    style={{
                        padding: "1px",
                        color: "black",
                    }}
                    type="hidden"
                    value={data.accessoryid_hidden}
                    name="accessoryid_hidden"
                    onChange={(e) => setData("accessoryid_hidden", e.target.value)}
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
                <th>Accessory Name</th>
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
};

export default Accessory;
