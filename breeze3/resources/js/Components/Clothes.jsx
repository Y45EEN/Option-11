import { useForm } from "@inertiajs/react";
import React, { useState } from "react";
import InputError from "@/Components/InputError";
const Clothes = ({ clothes, success }) => {
    const { data, setData, post, processing, errors, reset } = useForm({
        clothingid_hidden: "",
        quantity: "",
    });

    const [selectedClothes, setSelectedClothes] = useState("");

    const submit = (e) => {
        e.preventDefault();
        post("/addBasketClothing", data);
    };

    let rows = [];
    for (let i = 0; i < clothes.length; i++) {
        let bike = clothes[i];
        rows.push(
            <tr
                key={bike.clothingid}
                onClick={() => {
                    setSelectedClothes(bike.clothingid);
                    setData("clothingid_hidden", bike.clothingid);
                }}
            >
                <td>{bike.productname}</td>

                <td>{bike.description}</td>

                <td style={{ color: "white" }}>£{bike.price} </td>

                <input
                    id="clothingid_hidden"
                    min="0"
                    style={{
                        padding: "1px",
                        color: "black",
                    }}
                    type="hidden"
                    value={data.clothingid_hidden}
                    name="clothingid_hidden"
                    onChange={(e) => setData("clothingid_hidden", e.target.value)}
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
                        <th>Clothing Name</th>
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

export default Clothes;
