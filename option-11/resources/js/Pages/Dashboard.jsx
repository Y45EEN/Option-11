import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
import Dropdown from "@/Components/Dropdown";
import NavBar from "@/Components/NavBar";
import AnimateModal from "@/Components/AnimateModal";
import DashboardCard from "@/Components/DashboardCard";
export default function Dashboard({ auth, baskIcon }) {
    const handleDeleteConfirmation = (e) => {
        if (window.confirm("Are you sure you wish to delete your account?")) {
            this.onCancel(item);
        } else {
            e.preventDefault();
        }
    };

    return (
        <>
            <AnimateModal auth={auth} baskIcon={baskIcon}>
                <div className="dashboard-container">
                    <DashboardCard cardName="My account">
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

                    <DashboardCard cardName="Wishlist">
                        
                    </DashboardCard>
                </div>
            </AnimateModal>
        </>
    );
}
