import { useForm } from "@inertiajs/react";
import React, { useState } from "react";
import InputError from "@/Components/InputError";

const RepairKit = ({ repairKit }) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        repairkitsid_hidden: "",
        quantity: "",
    });

    const [selectedRepairKit, setSelectedRepairKit] = useState("");

    const submit = (e) => {
        e.preventDefault();
        post("/addBasketRepairkit", data);
    };

    let rows = [];
    for (let i = 0; i < repairKit.length; i++) {
        let bike = repairKit[i];
        rows.push(
            <tr
                key={bike.repairkitsid}
                onClick={() => {
                    setSelectedRepairKit(bike.repairkitsid);
                    setData("repairkitsid_hidden", bike.repairkitsid);
                }}
            >
                <td>{bike.productname}</td>

                <td>{bike.description}</td>

                <td style={{ color: "white" }}>£{bike.price} </td>

                <input
                    id="repairkitsid_hidden"
                    min="0"
                    style={{
                        padding: "1px",
                        color: "black",
                    }}
                    type="hidden"
                    value={data.repairkitsid_hidden}
                    name="repairkitsid_hidden"
                    onChange={(e) => setData("repairkitsid_hidden", e.target.value)}
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
                <th>Repair Kit Name</th>
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

export default RepairKit;
