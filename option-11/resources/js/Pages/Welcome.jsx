import React, { useState } from 'react';
import { AnimatePresence, motion } from 'framer-motion';
import NavBar from '@/Components/NavBar';
import MainImage from '@/Components/MainImage';
import Categories from '@/Components/Categories';
import MainPgProducts from '@/Components/MainPgProducts';
import Footer from '@/Components/Footer';
import Login from '@/Pages/Auth/Login'; // Import your Modal component

import mainBike from '../../assets/main-img.png';

const Home = ({ auth }) => {
  const [modalOpen, setModalOpen] = useState(false);

  const openModal = () => {
    setModalOpen(true);
  };

  const closeModal = () => {
    setModalOpen(false);
  };

  return (
    <>
      <main>
        <NavBar auth={auth} openModal={openModal} />
        <MainImage
          imageSrc={mainBike}
          altText="bike sign"
          heading="Ride the Extraordinary"
          subheading="Choose Option 11"
        />
        <Categories />
        <MainPgProducts />
      
        <AnimatePresence initial={false} mode='wait'>
          {modalOpen && (
            <Login modalOpen={modalOpen} handleClose={closeModal} />
          )}
        </AnimatePresence>
      </main>
      <Footer />
    </>
  );
};

export default Home;
