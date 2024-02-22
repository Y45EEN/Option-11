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
                                    className="text-white btn btn-dark"
                                >
                                    Personal information
                                </Link>

                                <Link
                                    href={route("updateAccount")}
                                    className="text-white btn btn-dark"
                                >
                                    Manage my addresses 
                                    
                                </Link>
                                <Link
                                    href={route("logout")}
                                    className="btn btn-outline-warning"
                                >
                                    Logout
                                </Link>
                                <Link
                                    href={route("logout")}
                                    className="btn btn-outline-danger"
                                >
                                    Delete account
                                </Link>
                            </div>
                        </div>
                    </DashboardCard>

                    <DashboardCard cardName="My orders">
                       
                    </DashboardCard>

                    <DashboardCard cardName="Wishlist">
                        
                    </DashboardCard>
                    
                </div>
            </AnimateModal>
        </>
    );
}
