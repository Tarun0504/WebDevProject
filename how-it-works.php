<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works - SocialFund</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            dark: '#0a2342', // dark blue
                            DEFAULT: '#134074',
                            light: '#13678a',
                        },
                        secondary: {
                            dark: '#1a936f', // green
                            DEFAULT: '#45c4b0',
                            light: '#9cf6f6',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class="bg-primary-dark text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-seedling text-secondary-DEFAULT mr-2 text-2xl"></i>
                        <span class="font-bold text-xl">SocialFund</span>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                        <a href="index.php" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-primary hover:bg-primary-light">Home</a>
                        <a href="discover.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                        <a href="start-project.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Start a Project</a>
                        <a href="how-it-works.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                        <a href="about.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="login.php" class="px-4 py-2 text-sm font-medium text-white hover:bg-primary-light rounded-md">Log In</a>
                    <a href="signup.php" class="ml-4 px-4 py-2 text-sm font-medium text-white bg-secondary-dark hover:bg-secondary rounded-md">Sign Up</a>
                </div>
                <div class="flex items-center md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary-light focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-white text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden mobile-menu hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-primary-light">Home</a>
                <a href="discover.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                <a href="start-project.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Start a Project</a>
                <a href="how-it-works.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                <div class="border-t border-gray-700 pt-4 pb-3 mt-3">
                    <a href="login.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Log In</a>
                    <a href="signup.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight">How SocialFund Works</h1>
                <p class="mt-4 text-xl text-gray-100 max-w-3xl mx-auto">Understand the process of creating, funding, and implementing social impact projects on our platform.</p>
            </div>
        </div>
    </section>

    <!-- Process Overview Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-primary-dark">The SocialFund Process</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">From idea to impact, here's how our platform helps bring social initiatives to life.</p>
            </div>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-primary-light"></div>
                
                <!-- Step 1 -->
                <div class="relative mb-16">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-12 mb-8 md:mb-0 md:text-right">
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary border-4 border-white"></div>
                            <span class="inline-block px-4 py-1 rounded-full bg-secondary-light text-primary-dark text-sm font-semibold mb-2">Step 1</span>
                            <h3 class="text-2xl font-bold text-primary-dark mb-2">Create Your Project</h3>
                            <p class="text-gray-600">Define your social initiative, set your funding goal, and create a compelling project page that showcases your vision and potential impact.</p>
                        </div>
                        <div class="flex-1 md:pl-12">
                            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                                <img src="/api/placeholder/500/300" alt="Create Project" class="w-full h-64 object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative mb-16">
                    <div class="flex flex-col md:flex-row-reverse items-center">
                        <div class="flex-1 md:pl-12 mb-8 md:mb-0 md:text-left">
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary border-4 border-white"></div>
                            <span class="inline-block px-4 py-1 rounded-full bg-secondary-light text-primary-dark text-sm font-semibold mb-2">Step 2</span>
                            <h3 class="text-2xl font-bold text-primary-dark mb-2">Project Review</h3>
                            <p class="text-gray-600">Our team reviews your project to ensure it meets our guidelines and aligns with our mission of creating positive social impact.</p>
                        </div>
                        <div class="flex-1 md:pr-12">
                            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                                <img src="/api/placeholder/500/300" alt="Project Review" class="w-full h-64 object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="relative mb-16">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-12 mb-8 md:mb-0 md:text-right">
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary border-4 border-white"></div>
                            <span class="inline-block px-4 py-1 rounded-full bg-secondary-light text-primary-dark text-sm font-semibold mb-2">Step 3</span>
                            <h3 class="text-2xl font-bold text-primary-dark mb-2">Launch Your Campaign</h3>
                            <p class="text-gray-600">Once approved, your project goes live on our platform. Share it with your network and leverage our community of supporters to gain traction.</p>
                        </div>
                        <div class="flex-1 md:pl-12">
                            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                                <img src="/api/placeholder/500/300" alt="Launch Campaign" class="w-full h-64 object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="relative mb-16">
                    <div class="flex flex-col md:flex-row-reverse items-center">
                        <div class="flex-1 md:pl-12 mb-8 md:mb-0 md:text-left">
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary border-4 border-white"></div>
                            <span class="inline-block px-4 py-1 rounded-full bg-secondary-light text-primary-dark text-sm font-semibold mb-2">Step 4</span>
                            <h3 class="text-2xl font-bold text-primary-dark mb-2">Funding Period</h3>
                            <p class="text-gray-600">Your project remains active for your chosen duration (15-90 days). During this time, supporters can pledge funds and share your initiative.</p>
                        </div>
                        <div class="flex-1 md:pr-12">
                            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                                <img src="/api/placeholder/500/300" alt="Funding Period" class="w-full h-64 object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="relative mb-16">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 md:pr-12 mb-8 md:mb-0 md:text-right">
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary border-4 border-white"></div>
                            <span class="inline-block px-4 py-1 rounded-full bg-secondary-light text-primary-dark text-sm font-semibold mb-2">Step 5</span>
                            <h3 class="text-2xl font-bold text-primary-dark mb-2">Successful Funding</h3>
                            <p class="text-gray-600">If you reach your funding goal, the pledged funds are transferred to you (minus platform fees) and you can begin implementing your project.</p>
                        </div>
                        <div class="flex-1 md:pl-12">
                            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                                <img src="/api/placeholder/500/300" alt="Successful Funding" class="w-full h-64 object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 6 -->
                <div class="relative">
                    <div class="flex flex-col md:flex-row-reverse items-center">
                        <div class="flex-1 md:pl-12 mb-8 md:mb-0 md:text-left">
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary border-4 border-white"></div>
                            <span class="inline-block px-4 py-1 rounded-full bg-secondary-light text-primary-dark text-sm font-semibold mb-2">Step 6</span>
                            <h3 class="text-2xl font-bold text-primary-dark mb-2">Implementation & Updates</h3>
                            <p class="text-gray-600">Bring your project to life and share regular updates with your supporters. Document your progress and showcase the impact you're creating.</p>
                        </div>
                        <div class="flex-1 md:pr-12">
                            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                                <img src="/api/placeholder/500/300" alt="Implementation" class="w-full h-64 object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 text-center">
                <a href="start-project.html" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary-dark hover:bg-secondary">
                    Start Your Project <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- For Project Creators Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">For Project Creators</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Everything you need to know to successfully fund your social initiative.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="text-primary-dark text-4xl mb-4">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-3">Project Guidelines</h3>
                    <p class="text-gray-600 mb-4">Understand what types of projects qualify for our platform and how to present them effectively to maximize your chances of successful funding.</p>
                    <a href="guidelines.html" class="text-primary hover:text-primary-dark font-medium">Read guidelines <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="text-primary-dark text-4xl mb-4">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-3">Funding Tips</h3>
                    <p class="text-gray-600 mb-4">Learn strategies for setting realistic funding goals, creating compelling reward tiers, and effectively promoting your campaign.</p>
                    <a href="funding-tips.html" class="text-primary hover:text-primary-dark font-medium">View tips <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="text-primary-dark text-4xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-dark mb-3">Project Management</h3>
                    <p class="text-gray-600 mb-4">Discover best practices for managing your project after successful funding, including budget tracking, timeline management, and supporter engagement.</p>
                    <a href="project-management.html" class="text-primary hover:text-primary-dark font-medium">Learn more <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- For Supporters Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">For Supporters</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Discover how you can make a difference by supporting social impact projects.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-light rounded-full p-4 mr-4">
                            <i class="fas fa-search text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-dark">Finding Projects</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Browse projects by category, location, or funding status. Use our search feature to find initiatives aligned with your interests and values.</p>
                    <a href="discover.html" class="inline-flex items-center text-primary hover:text-primary-dark font-medium">
                        Discover projects <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-light rounded-full p-4 mr-4">
                            <i class="fas fa-hand-holding-heart text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-dark">Making Contributions</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Support projects through direct contributions or by selecting reward tiers. Choose the level of support that works for your budget and interests.</p>
                    <a href="contribution-guide.html" class="inline-flex items-center text-primary hover:text-primary-dark font-medium">
                        Contribution guide <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-light rounded-full p-4 mr-4">
                            <i class="fas fa-shield-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-dark">Trust & Safety</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Understand how we verify projects and ensure your contributions are used responsibly. Learn about our project review process and accountability measures.</p>
                    <a href="trust.html" class="inline-flex items-center text-primary hover:text-primary-dark font-medium">
                        Learn about trust & safety <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary-light rounded-full p-4 mr-4">
                            <i class="fas fa-comments text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-dark">Engaging with Projects</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Follow projects you support to receive updates, comment on project pages, and share initiatives with your network to amplify their reach and impact.</p>
                    <a href="engagement.html" class="inline-flex items-center text-primary hover:text-primary-dark font-medium">
                        Engagement guide <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Fees & Payments Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Fees & Payments</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Transparent information about our fee structure and payment processing.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
                <h3 class="text-xl font-bold text-primary-dark mb-4">Fee Structure</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fee Type</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <div class="text-sm leading-5 font-medium text-gray-900">Platform Fee</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">5%</div>
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">Applied to the total funds raised for successfully funded projects.</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <div class="text-sm leading-5 font-medium text-gray-900">Payment Processing</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">3% + $0.30</div>
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">Per transaction fee for credit card or payment processing.</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <div class="text-sm leading-5 font-medium text-gray-900">Unsuccessful Projects</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">0%</div>
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">No fees are charged if your project doesn't reach its funding goal.</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold text-primary-dark mb-4">Payment Processing</h3>
                <p class="text-gray-600 mb-6">We partner with trusted payment processors to ensure secure transactions for all contributions.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold text-primary-dark mb-3">For Project Creators</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary-dark mt-1 mr-2"></i>
                                <span>Funds are held securely until the project reaches its funding goal.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary-dark mt-1 mr-2"></i>
                                <span>Successfully funded projects receive disbursements within 7-10 business days after the campaign ends.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary-dark mt-1 mr-2"></i>
                                <span>Multiple payout options available including direct deposit and bank transfers.</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold text-primary-dark mb-3">For Supporters</h4>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary-dark mt-1 mr-2"></i>
                                <span>Secure payment processing with encryption and fraud protection.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary-dark mt-1 mr-2"></i>
                                <span>Multiple payment methods accepted including credit cards and digital wallets.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-secondary-dark mt-1 mr-2"></i>
                                <span>Automated refunds for projects that don't reach their funding goals.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-dark">Frequently Asked Questions</h2>
                <p class="mt-4 text-lg text-gray-600">Find answers to common questions about our platform and process.</p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-primary-dark mb-2">What happens if a project doesn't reach its funding goal?</h3>
                    <p class="text-gray-600">We use an all-or-nothing funding model. If a project doesn't reach its funding goal, all pledges are automatically refunded to the supporters, and no fees are charged.</p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-primary-dark mb-2">Can I change my pledge amount after contributing?</h3>
                    <p class="text-gray-600">Yes, you can change your pledge amount by visiting your account settings and selecting the project you wish to modify.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>