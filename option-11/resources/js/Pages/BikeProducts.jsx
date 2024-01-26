// resources/js/pages/BikeProducts.jsx


import { InertiaLink } from '@inertiajs/inertia-react';

import Bike from '../components/Bike';

import React, { useState } from "react";
import { AnimatePresence } from 'framer-motion';
import NavBar from "@/Components/NavBar";
import Login from '@/Pages/Auth/Login';

const BikeProducts = ({ auth, bikes }) => {
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
   

      <Bike bikes={bikes} />

      <AnimatePresence initial={false} mode='wait'>
          {modalOpen && (
            <Login modalOpen={modalOpen} handleClose={closeModal} />
          )}
        </AnimatePresence>

      <InertiaLink className="text-white" href={route('basket')}>Go to Basket</InertiaLink>
    </div>
  );
};

export default BikeProducts;