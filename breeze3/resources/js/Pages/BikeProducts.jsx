// resources/js/pages/BikeProducts.jsx

import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';
import { useForm } from "@inertiajs/react";
import Bike from '../components/Bike';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";


import NavBar from "@/Components/NavBar";


const BikeProducts = ({ auth, bikes }) => {

  return (
    <div>
        <NavBar auth={auth} />
      <h1>Bikes for Sale</h1>
 
        <Bike bikes={bikes} />
   
      <InertiaLink style={{ color: "white" }} href={route('basket')}>Go to Basket</InertiaLink>
    </div>
  );
};

export default BikeProducts;
