export default function MainLayout({
    children,
}: {
    children: React.ReactNode;
}) {
    return (
        <main className="p-4 min-h-screen bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
            {children}
        </main>
    );
}
