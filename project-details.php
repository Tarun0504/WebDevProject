<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Water Initiative - SocialFund</title>
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

    <!-- Main Content -->
    <main class="flex-grow py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <div class="py-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="index.html" class="text-primary hover:text-primary-light">Home</a>
                        </li>
                        <li class="flex items-center">
                            <span class="mx-2 text-gray-500">/</span>
                            <a href="discover.html" class="text-primary hover:text-primary-light">Discover</a>
                        </li>
                        <li class="flex items-center">
                            <span class="mx-2 text-gray-500">/</span>
                            <span class="text-gray-700">Clean Water Initiative</span>
                        </li>
                    </ol>
                </nav>
            </div>
            
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-8">
                    <img src="/api/placeholder/800/400" alt="Clean Water Initiative" class="w-full h-80 object-cover rounded-lg shadow-md" />
                    
                    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-sm font-semibold px-3 py-1 bg-secondary-light text-primary-dark rounded-full">Environment</span>
                            <span class="text-sm font-semibold px-3 py-1 bg-secondary-light text-primary-dark rounded-full">Health</span>
                            <span class="text-sm font-semibold px-3 py-1 bg-secondary-light text-primary-dark rounded-full">Community</span>
                        </div>
                        
                        <h1 class="text-3xl font-bold text-primary-dark mb-4">Clean Water Initiative</h1>
                        
                        <div class="flex items-center mb-6">
                            <img src="/api/placeholder/60/60" alt="Profile" class="w-12 h-12 rounded-full object-cover" />
                            <div class="ml-4">
                                <p class="font-semibold text-primary-dark">Green Earth Foundation</p>
                                <p class="text-sm text-gray-600">New York, USA • 24 projects</p>
                            </div>
                        </div>
                        
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-primary-dark mb-4">About this project</h2>
                            <p class="text-gray-700 mb-4">The Clean Water Initiative aims to address the critical challenges of water scarcity and contamination in rural communities across three developing regions. Our project focuses on implementing sustainable water solutions that will provide clean, safe drinking water to over 5,000 people who currently lack access to this basic necessity.</p>
                            
                            <p class="text-gray-700 mb-4">Water is fundamental to life, yet millions of people around the world still lack access to clean drinking water. Contaminated water sources lead to waterborne diseases that affect vulnerable populations, particularly children and the elderly. Our initiative tackles this problem through a three-pronged approach:</p>
                            
                            <ul class="list-disc list-inside text-gray-700 mb-4 pl-4 space-y-2">
                                <li>Installing water filtration systems in community centers and schools</li>
                                <li>Drilling new wells to access clean groundwater sources</li>
                                <li>Providing education on water conservation and hygiene practices</li>
                            </ul>
                            
                            <p class="text-gray-700 mb-4">With your support, we'll be able to implement these solutions in 15 villages across three regions, directly impacting thousands of lives and creating lasting change in these communities.</p>
                            
                            <p class="text-gray-700">The Green Earth Foundation has successfully completed similar water projects in 12 communities over the past five years, creating sustainable systems that continue to provide clean water today. Our team of engineers, community organizers, and health specialists work directly with local leadership to ensure solutions are appropriate for each community's specific needs.</p>
                        </div>
                        
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-primary-dark mb-4">Project goals</h2>
                            <ul class="list-disc list-inside text-gray-700 pl-4 space-y-2">
                                <li>Install 15 community water filtration systems</li>
                                <li>Drill 8 new wells in areas with limited water access</li>
                                <li>Conduct 30 water conservation and hygiene workshops</li>
                                <li>Train 45 local technicians to maintain water systems</li>
                                <li>Reduce waterborne diseases by 60% in target communities</li>
                                <li>Create sustainable water committees in each community</li>
                            </ul>
                        </div>
                        
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-primary-dark mb-4">Project timeline</h2>
                            <div class="relative">
                                <div class="absolute left-4 h-full w-0.5 bg-gray-200"></div>
                                <div class="space-y-6">
                                    <div class="relative flex items-start pl-10">
                                        <div class="absolute left-0 mt-1 -ml-1.5 h-8 w-8 rounded-full bg-secondary-dark flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-medium text-primary-dark">Phase 1: Assessment & Planning</h3>
                                            <p class="text-sm text-gray-500">May - June 2025</p>
                                            <p class="mt-1 text-gray-700">Community needs assessment, site selection, and detailed project planning.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="relative flex items-start pl-10">
                                        <div class="absolute left-0 mt-1 -ml-1.5 h-8 w-8 rounded-full bg-secondary-dark flex items-center justify-center">
                                            <i class="fas fa-tools text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-medium text-primary-dark">Phase 2: Implementation</h3>
                                            <p class="text-sm text-gray-500">July - October 2025</p>
                                            <p class="mt-1 text-gray-700">Installation of water filtration systems, well drilling, and initial workshops.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="relative flex items-start pl-10">
                                        <div class="absolute left-0 mt-1 -ml-1.5 h-8 w-8 rounded-full bg-primary-light flex items-center justify-center">
                                            <i class="fas fa-graduation-cap text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-medium text-primary-dark">Phase 3: Training & Education</h3>
                                            <p class="text-sm text-gray-500">November - December 2025</p>
                                            <p class="mt-1 text-gray-700">Technical training for local maintenance teams and community education programs.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="relative flex items-start pl-10">
                                        <div class="absolute left-0 mt-1 -ml-1.5 h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                                            <i class="fas fa-chart-line text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-medium text-primary-dark">Phase 4: Monitoring & Evaluation</h3>
                                            <p class="text-sm text-gray-500">January - March 2026</p>
                                            <p class="mt-1 text-gray-700">Ongoing support, impact assessment, and project reporting.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-primary-dark mb-4">Gallery</h2>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <img src="/api/placeholder/200/150" alt="Project Image 1" class="w-full h-32 object-cover rounded-md cursor-pointer" />
                                <img src="/api/placeholder/200/150" alt="Project Image 2" class="w-full h-32 object-cover rounded-md cursor-pointer" />
                                <img src="/api/placeholder/200/150" alt="Project Image 3" class="w-full h-32 object-cover rounded-md cursor-pointer" />
                                <img src="/api/placeholder/200/150" alt="Project Image 4" class="w-full h-32 object-cover rounded-md cursor-pointer" />
                            </div>
                        </div>
                        
                        <div>
                            <h2 class="text-xl font-semibold text-primary-dark mb-4">Updates</h2>
                            <div class="space-y-6">
                                <div class="border-l-4 border-secondary-dark pl-4">
                                    <p class="text-sm text-gray-500 mb-1">April 10, 2025</p>
                                    <h3 class="font-medium text-primary-dark mb-2">Project Launched!</h3>
                                    <p class="text-gray-700">We're excited to announce the launch of our Clean Water Initiative! Thank you to all our early supporters. We've already begun the initial assessments in our first target community.</p>
                                </div>
                                
                                <div class="border-l-4 border-secondary-dark pl-4">
                                    <p class="text-sm text-gray-500 mb-1">April 5, 2025</p>
                                    <h3 class="font-medium text-primary-dark mb-2">Partnership Announcement</h3>
                                    <p class="text-gray-700">We're thrilled to announce our partnership with WaterTech Solutions, who will be providing technical expertise and equipment at reduced costs to maximize our impact.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                        <h2 class="text-xl font-semibold text-primary-dark mb-4">Comments (12)</h2>
                        
                        <div class="mb-6">
                            <form>
                                <div class="mb-4">
                                    <textarea placeholder="Leave a comment or ask a question..." rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="px-4 py-2 bg-primary hover:bg-primary-light text-white rounded-md">Post Comment</button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="border-b border-gray-200 pb-4">
                                <div class="flex items-start">
                                    <img src="/api/placeholder/40/40" alt="Profile" class="w-10 h-10 rounded-full object-cover mr-4" />
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-1">
                                            <h3 class="font-medium text-primary-dark">Michael Chen</h3>
                                            <span class="text-xs text-gray-500">2 days ago</span>
                                        </div>
                                        <p class="text-gray-700">This is exactly the kind of initiative my community benefited from last year. The impact has been tremendous - our children are healthier, and families spend less time collecting water from distant sources.</p>
                                        <div class="mt-2 flex items-center space-x-4">
                                            <button class="text-sm text-gray-500 hover:text-primary">Reply</button>
                                            <button class="text-sm text-gray-500 hover:text-primary flex items-center">
                                                <i class="far fa-heart mr-1"></i> Like (8)
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border-b border-gray-200 pb-4">
                                <div class="flex items-start">
                                    <img src="/api/placeholder/40/40" alt="Profile" class="w-10 h-10 rounded-full object-cover mr-4" />
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-1">
                                            <h3 class="font-medium text-primary-dark">Sarah Johnson</h3>
                                            <span class="text-xs text-gray-500">5 days ago</span>
                                        </div>
                                        <p class="text-gray-700">Will you be providing any updates on water quality metrics after the systems are installed? I'm particularly interested in how the filtration systems perform over time.</p>
                                        <div class="mt-2 flex items-center space-x-4">
                                            <button class="text-sm text-gray-500 hover:text-primary">Reply</button>
                                            <button class="text-sm text-gray-500 hover:text-primary flex items-center">
                                                <i class="far fa-heart mr-1"></i> Like (3)
                                            </button>
                                        </div>
                                        
                                        <div class="mt-4 pl-6 border-l-2 border-gray