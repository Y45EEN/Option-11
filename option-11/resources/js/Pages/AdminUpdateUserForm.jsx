
import { InertiaLink } from "@inertiajs/inertia-react";
import Accessory from "../components/Accessory";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import React, { useState } from "react";
import { AnimatePresence } from 'framer-motion';
import NavBar from "@/Components/NavBar";
import { Head, Link, useForm } from "@inertiajs/react";
import Login from '@/Pages/Auth/Login';
import AnimateModal from '@/Components/AnimateModal';
const AdminUpdateUserForm = ({ auth, user }) => {
  
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: false,
    });
    return (
        <div>
            <p>{user.userid}</p>

            
        </div>
    );
}

export default AdminUpdateUserForm;