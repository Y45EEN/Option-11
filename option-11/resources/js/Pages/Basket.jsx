import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, useForm } from "@inertiajs/react";
import React, { useState, useEffect } from "react";
import NavBar from "@/Components/NavBar";
import { Inertia } from "@inertiajs/inertia";
import { AnimatePresence } from "framer-motion";
import Login from "@/Pages/Auth/Login";
import AnimateModal from "@/Components/AnimateModal";
export default function Basket({ auth, basket, totalprice, bikes }) {
    const { data, setData, post } = useForm({
        basketid: null,
    });

    const handleItemRemove = (e, basketid) => {
        e.preventDefault();
        setData("basketid", basketid);
    };

    useEffect(() => {
        const scrollToTopButton = document.getElementById("scrollToTop");

        const handleScrollToTop = () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        };

        if (scrollToTopButton) {
            scrollToTopButton.addEventListener("click", handleScrollToTop);
        }

        return () => {
            if (scrollToTopButton) {
                scrollToTopButton.removeEventListener(
                    "click",
                    handleScrollToTop
                );
            }
        };
    }, []);

    useEffect(() => {
        const removeItem = async () => {
            await post("/deleteProduct");
        };

        if (data.basketid !== null) {
            removeItem();
        }
    }, [data.basketid]);

    return (
        <>
            <AnimateModal auth={auth}>
                <Head title="Basket" />

                <body className="basketbody">
                    <div className="basketContainer">
                        <h1 className="h1basket">Shopping Basket</h1>

                        <div className="basketClass">
                            {basket.length > 0 ? (
                                <div>
                                    {basket.map((item, index) => (
                                        <div className="basketitem" key={index}>
                                            <div
                                                className={
                                                    index % 2 === 0 ? "" : ""
                                                }
                                            >
                                                <div className="item-details">
                                                    <h2 className="h2basket">
                                                        {
                                                            bikes[index]
                                                                .productname
                                                        }
                                                    </h2>

                                                    <p>
                                                        Price: £
                                                        {item.totalprice}
                                                    </p>
                                                    <p>
                                                        Quantity:{" "}
                                                       
                                                    </p>
                                                    <div
                                                            style={{
                                                                width: "1rem",
                                                                height: "1rem",
                                                                position:
                                                                    "relative",
                                                                // Adjust the top value as needed
                                                                left: "20px", // Adjust the right value as needed
                                                                bottom: "22px",
                                                            }}
                                                        >
                                                            <div
                                                                className="rounded-circle bg-danger d-flex justify-content-center align-items-center"
                                                                style={{
                                                                    width: "1rem",
                                                                    height: "1rem",
                                                                    position:
                                                                        "relative",
                                                                    // Adjust the top value as needed
                                                                    right: "20px", // Adjust the right value as needed
                                                                    top: "22px",
                                                                }}
                                                            >
                                                                <span
                                                                    style={{
                                                                        color: "#fff",
                                                                        fontSize:
                                                                            "1rem",
                                                                    }}
                                                                >
                                                                    -
                                                                </span>
                                                            </div>
                                                            {item.quantity}{" "}
                                                            <div
                                                                className="rounded-circle bg-success d-flex justify-content-center align-items-center"
                                                                style={{
                                                                    width: "1rem",
                                                                    height: "1rem",
                                                                    position:
                                                                        "relative",
                                                                    // Adjust the top value as needed
                                                                    left: "12px", // Adjust the right value as needed
                                                                    bottom: "24px",
                                                                }}
                                                            >
                                                                <span
                                                                    style={{
                                                                        color: "#fff",
                                                                        fontSize:
                                                                            "1rem",
                                                                    }}
                                                                >
                                                                    +
                                                                </span>
                                                            </div>
                                                        </div>

                                                    <form
                                                        onSubmit={(e) =>
                                                            handleItemRemove(
                                                                e,
                                                                item.basketid
                                                            )
                                                        }
                                                    >
                                                        <button
                                                            type="submit"
                                                            className="text-red-500 hover:underline"
                                                        >
                                                            Remove
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    ))}

                                    <div className="total">
                                        <h2 className="h2basket">
                                            Total Amount:
                                        </h2>
                                        <p>£{totalprice}</p>
                                    </div>

                                    <button
                                        type="button"
                                        onClick={() =>
                                            Inertia.visit(route("checkout"))
                                        }
                                        className="checkout-btn"
                                    >
                                        Go to Checkout
                                    </button>
                                </div>
                            ) : (
                                <p style={{ fontSize: "25px" }}>
                                    Your basket is empty.
                                </p>
                            )}
                        </div>
                    </div>
                </body>

                <button
                    className="mt-3 btn btn-outline-light"
                    id="scrollToTop"
                    title="Scroll to Top"
                    style={{ display: "block", margin: "0 auto" }}
                >
                    ^ Back to Top
                </button>
            </AnimateModal>
        </>
    );
}
