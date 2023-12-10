import { useForm } from "@inertiajs/react";
import React, { useState } from "react";
import InputError from "@/Components/InputError";
const Bike = ({ bikes, success }) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        bikeid_hidden: "",
        quantity: "",
    });

    const [selectedBikeId, setSelectedBikeId] = useState("");

    const submit = (e) => {
        e.preventDefault();
        post("/addBasket", data);
    };

    let rows = [];
    for (let i = 0; i < bikes.length; i++) {
        let bike = bikes[i];
        rows.push(
            <tr
                key={bike.bikeid}
                onClick={() => {
                    setSelectedBikeId(bike.bikeid);
                    setData("bikeid_hidden", bike.bikeid);
                }}
            >
                <td>{bike.productname}</td>

                <td>{bike.description}</td>

                <td style={{ color: "white" }}>£{bike.price} </td>

                <input
                    id="bikeid_hidden"
                    min="0"
                    style={{
                        padding: "1px",
                        color: "black",
                    }}
                    type="hidden"
                    value={data.bikeid_hidden}
                    name="bikeid_hidden"
                    onChange={(e) => setData("bikeid_hidden", e.target.value)}
                />

               
                <td>
                    <button type="submit">Add to basket</button>
                </td>
            </tr>
        );
    }

    return (
        <div>
            <form onSubmit={submit}>
                <table style={{ color: "white" }}>
                    <thead>
                        <th>Bike Name</th>
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
                <p style={{ color: "white" }}>{success}</p>
                </table>
            </form>
        </div>
    );
};

export default Bike;
