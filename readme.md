# SPEC-001: BrightFrame Project Management System

## Table of Contents
1. [Background](#background)
2. [Requirements](#requirements)
   - [Must-Have (Core Features for MVP)](#must-have-core-features-for-mvp)
   - [Should-Have (Important but not MVP)](#should-have-important-but-not-mvp)
   - [Could-Have (Future Enhancements)](#could-have-future-enhancements)
   - [Won’t-Have (for now)](#wont-have-for-now)
3. [Method](#method)
   - [Technology Stack](#technology-stack)
   - [System Architecture](#system-architecture)
   - [Database Schema (Simplified)](#database-schema-simplified)
4. [Implementation](#implementation)
5. [Milestones](#milestones)
6. [Gathering Results](#gathering-results)

## Background

BrightFrame requires a **software engineering project management system** that allows employees to log in using their **company email (@brightframe.co.zw)**. The system will facilitate **team collaboration** through chat, **work progress tracking**, and **GitHub integration**. Employees will have different privileges, including the ability to **post blogs** on the company's website and **update their project status**.  

Additionally, the system will include a **client list** and a **calendar** for managing events. Sales team members will be able to **send invoices**, **record payments**, and track sales activities. Some advanced features will be planned for future versions.

## Requirements

### Must-Have (Core Features for MVP)
- **User Authentication & Roles**
  - Employees must log in using their **@brightframe.co.zw** email.
  - Different **privileges** based on roles (e.g., developer, manager, sales, etc.).
- **Collaboration & Work Tracking**
  - **Chat system** for internal communication.
  - Employees can **update work progress** (linked to GitHub commits).
  - **Task management** to assign and track tasks.
- **Client & Sales Management**
  - Maintain a **client list** (CRUD: Create, Read, Update, Delete).
  - **Sales team** can **send invoices** and **record payments**.
- **Company Blog Management**
  - Employees with the right privileges can **post blogs** on the company website.
- **Calendar & Events**
  - Integrated **calendar** for scheduling meetings and deadlines.

### Should-Have (Important but not MVP)
- **Advanced GitHub Integration** (automated tracking of pull requests, issues, etc.).
- **Invoice Reports & Analytics** for sales performance tracking.

### Could-Have (Future Enhancements)
- **AI-powered work progress insights**.
- **Third-party integrations** (e.g., Slack, Trello, Google Calendar).
- **File sharing & document management**.

### Won’t-Have (for now)
- **Mobile App Version** (Initial focus on web-based platform).
- **Payroll Processing** (Handled separately).

## Method

### Technology Stack
- **Backend**: PHP (Laravel Framework for security & scalability)
- **Frontend**: Vue.js or React for a dynamic user interface
- **Database**: MySQL or PostgreSQL
- **Authentication**: Laravel’s built-in Auth system with email verification
- **Chat System**: WebSockets (Laravel Echo + Pusher or Socket.io)
- **GitHub Integration**: GitHub API for tracking commits & pull requests
- **Calendar**: FullCalendar.js for scheduling
- **Invoice Management**: Custom Laravel module for invoice generation and payment tracking

### System Architecture
The system follows a **modular MVC (Model-View-Controller) structure**:

#### Main Modules:
- ✅ **Authentication & User Management** (Admin assigns roles)
- ✅ **Project & Work Tracking** (Link to GitHub commits)
- ✅ **Chat System** (Real-time messaging for collaboration)
- ✅ **Client & Sales Management** (Invoices, payments, client database)
- ✅ **Calendar & Scheduling** (Meetings, deadlines)
- ✅ **Company Blog Management** (Posting & approval process)

### Database Schema (Simplified)
| Table Name      | Fields |
|----------------|--------|
| **Users**      | id, name, email, role (admin, dev, sales, etc.), password |
| **Projects**   | id, name, description, status, assigned_to (user_id), github_repo |
| **Chat Messages** | id, sender_id, receiver_id, message, timestamp |
| **Clients**    | id, name, contact_info, company_name, sales_rep_id |
| **Invoices**   | id, client_id, amount, status (paid/unpaid), due_date |
| **Blog Posts** | id, title, content, author_id, status (draft/published) |

## Implementation

1. **Setup Laravel Project**  
   - Install Laravel, configure authentication with company emails.  
   - Implement role-based access control.  

2. **Develop Core Features**  
   - Build user authentication system.  
   - Implement **Chat System** using Laravel Echo & WebSockets.  
   - Develop **GitHub Integration** with API endpoints.  
   - Create **Task Management** system for tracking work progress.  
   - Design and implement **Calendar & Scheduling**.  
   - Develop **Client Management** and **Invoice System**.  

3. **Frontend Development**  
   - Build user interface with Vue.js or React.  
   - Integrate with backend APIs.  

4. **Testing & Deployment**  
   - Perform unit & integration testing.  
   - Deploy on a production server with CI/CD pipelines.  

## Milestones

1. **Week 1-2**: Project Setup & Authentication System  
2. **Week 3-4**: Chat System & GitHub Integration  
3. **Week 5-6**: Task Management & Calendar Module  
4. **Week 7-8**: Client & Sales Management  
5. **Week 9-10**: Blog System & Final Testing  
6. **Week 11-12**: Deployment & User Training  

## Gathering Results

- **User Feedback**: Get input from employees about usability.  
- **Performance Metrics**: Monitor system stability and performance.  
- **Feature Evaluation**: Assess how well the system meets the defined requirements.  
- **Iterate & Improve**: Plan updates based on real-world usage.  
