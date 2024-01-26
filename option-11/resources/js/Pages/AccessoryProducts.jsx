
import { InertiaLink } from "@inertiajs/inertia-react";
import Accessory from "../components/Accessory";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import React, { useState } from "react";
import { AnimatePresence } from 'framer-motion';
import NavBar from "@/Components/NavBar";
import Login from '@/Pages/Auth/Login';
const AccessoryProducts = ({ auth, accessories }) => {
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
            <AnimatePresence initial={false} mode='wait'>
          {modalOpen && (
            <Login modalOpen={modalOpen} handleClose={closeModal} />
          )}
        </AnimatePresence>
            <Accessory accessories={accessories} />

            <InertiaLink className="text-white" href={route('basket')}>Go to Basket</InertiaLink>
        </div>
    );
}

export default AccessoryProducts;