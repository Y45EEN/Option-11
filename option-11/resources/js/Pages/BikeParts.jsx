// Desc: BikeParts page for the user to view all bike parts
// We use react because we are using react components
import React, { useState } from "react";
// We use inertia link to link to other pages
import { InertiaLink } from '@inertiajs/inertia-react';
// We import the bikepart component to use in the page
import BikePart from "@/Components/BikePart";  // Updated import name
import { AnimatePresence, motion } from 'framer-motion';

// We import the navbar component to use the navbar
import NavBar from "@/Components/NavBar";
import Login from '@/Pages/Auth/Login';
// In React, we use a function to create a component, which can be a page or a component
// In this case, this is a page, so we create a function called BikeParts
// In the page bikeparts, we pass in the props auth and bikeparts, which we get from the controller, to use in the page

const BikeParts = ({ auth, bikePart }) => {
    const [modalOpen, setModalOpen] = useState(false);

    const openModal = () => {
      setModalOpen(true);
    };
  
    const closeModal = () => {
      setModalOpen(false);
    };
    return (
        <div>
            <NavBar auth={auth} openModal={openModal} />

            <BikePart bikePart={bikePart} />

            <InertiaLink className="text-white" href={route('basket')}>Go to Basket</InertiaLink>
            <AnimatePresence initial={false} mode='wait'>
          {modalOpen && (
            <Login modalOpen={modalOpen} handleClose={closeModal} />
          )}
        </AnimatePresence>
        </div>
    );
}

// We export the component so we can use it in other pages
export default BikeParts;