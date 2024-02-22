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
                    <div className="mt-1 d-flex justify-content-evenly">
                            <div className="flex-col space-y-3 d-flex">
                                
                                <Link
                                    href={route("updateAccount")}
                                    class="btn btn-dark"
                                >
                                    Personal information
                                </Link>

                                <Link
                                    href={route("updateAccount")}
                                    className="px-4 py-2 text-center text-white bg-blue-500 rounded-md "
                                >
                                    Manage my addresses 
                                    
                                </Link>
                                <Link
                                    href={route("logout")}
                                    className="px-4 py-2 text-center text-white bg-yellow-500 rounded-md "
                                >
                                    Logout
                                </Link>
                                <Link
                                    href={route("logout")}
                                    className="px-4 py-2 text-center text-white bg-yellow-500 rounded-md "
                                >
                                    Delete account
                                </Link>
                            </div>
                        </div>
                    </DashboardCard>

                    <DashboardCard cardName="My orders">
                        <Link
                            href={route("logout")}
                            className="px-4 py-2 text-center text-white bg-yellow-500 rounded-md "
                        >
                            Logout
                        </Link>
                        <Link
                            href={route("updateAccount")}
                            className="px-4 py-2 text-center text-white bg-blue-500 rounded-md "
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
