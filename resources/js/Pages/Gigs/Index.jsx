import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Index({ auth, gigs }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Browse Gigs
                </h2>
            }
        >
            <Head title="Browse Gigs" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {gigs.length === 0 ? (
                        <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center text-gray-500">
                            No gigs available at the moment. Be the first to
                            post one!
                        </div>
                    ) : (
                        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                            {gigs.map((gig) => (
                                <div
                                    key={gig.id}
                                    className="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border border-gray-200"
                                >
                                    <h3 className="text-lg font-bold text-gray-900 mb-2">
                                        {gig.title}
                                    </h3>
                                    <p className="text-gray-600 text-sm mb-4 line-clamp-3">
                                        {gig.description}
                                    </p>

                                    <div className="flex justify-between items-center pt-4 border-t border-gray-100">
                                        <span className="text-xs text-gray-500">
                                            By {gig.user.name}
                                        </span>
                                        <span className="text-lg font-extrabold text-green-600">
                                            ${gig.price}
                                        </span>
                                    </div>
                                </div>
                            ))}
                        </div>
                    )}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
