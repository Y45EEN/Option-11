import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";
import Authenticated from "@/Layouts/AuthenticatedLayout";
import { Inertia } from "@inertiajs/inertia";
import NavBar from "@/Components/NavBar";
import { HSquareFill } from "react-bootstrap-icons";
import { Link } from "@inertiajs/react";
import AdminNavbar from '@/Pages/AdminNavbar';
import DashboardCard from "@/Components/DashboardCard";
const RepairBooking = ({ auth }) => {
    return (
        <div>
            <AdminNavbar/>

            <div className="dashboard-container">

            <DashboardCard cardName="Notifications">
                    <div className="d-flex justify-content-evenly mt-1">
                            <div className="d-flex flex-col space-y-3">
                                <Link
                                    href={route("logout")}
                                    className=" text-center bg-yellow-500 text-white px-4 py-2 rounded-md  "
                                >
                                    Logout
                                </Link>
                                <Link
                                    href={route("updateAccount")}
                                    className=" text-center bg-blue-500 text-white px-4 py-2 rounded-md  "
                                >
                                    Update Email
                                </Link>

                                <Link
                                    href={route("updateAccount")}
                                    className=" text-center bg-blue-500 text-white px-4 py-2 rounded-md  "
                                >
                                    Update address
                                </Link>
                            </div>
                        </div>
                    </DashboardCard>

                    <DashboardCard cardName="My orders">
                        <Link
                            href={route("logout")}
                            className=" text-center bg-yellow-500 text-white px-4 py-2 rounded-md  "
                        >
                            Logout
                        </Link>
                        <Link
                            href={route("updateAccount")}
                            className=" text-center bg-blue-500 text-white px-4 py-2 rounded-md  "
                        >
                            Update Account
                        </Link>
                    </DashboardCard>

              

                    </div>
          

        
        </div>
    );
};

export default RepairBooking;
